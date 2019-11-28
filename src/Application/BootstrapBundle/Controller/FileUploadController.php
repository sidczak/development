<?php

namespace Application\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;

use Application\BootstrapBundle\Entity\FileUpload;
use Application\BootstrapBundle\Form\FileUploadType;
use Application\BootstrapBundle\Entity\FileUploadMultiple;
use Application\BootstrapBundle\Form\FileUploadMultipleType;


class FileUploadController extends Controller
{

    /**
     * @Route("/file-upload-basic", name="_file-upload-basic")
     * @Template()
     */
    public function fileUploadBasicAction()
    {
    	
        //$query = $this->getRequest()->get('img');
        $path = __DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic/';
        //$path = $this->get('kernel')->getRootDir(). '/../web/bundles/applicationbootstrap/uploads/basic/';
    	
    	$request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
	        if($_FILES['img']['error'] == UPLOAD_ERR_OK){
	        	if (file_exists($path . $_FILES['img']['name'])){
	        	    $this->get('session')->getFlashBag()->add('contact-warning',  sprintf('Plik już został dodany.'));
	        	}else{
	            	move_uploaded_file($_FILES['img']['tmp_name'], $path . $_FILES['img']['name']);
	            	$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Dodano nowy plik: '.$_FILES['img']['name']));
	        	}
	        }else{
	        	$this->get('session')->getFlashBag()->add('contact-error',  sprintf('Wybierz plik.'));
	        }
        }
        
        $dir_handle = @opendir($path) or die("Nie moge wczytać");
         
		$files = array();
        while ($file = readdir($dir_handle)) {
        	if($file == "." || $file == ".." || $file == ".svn" || $file == "index.php" )
        	continue;
			$files[] = $file;
		}
		closedir($dir_handle); 

        return array('files' => $files);
    }
    
    /**
     * @Route("/file-upload-basic/{file}/delete", name="_file-upload-basic-delete")
     * @Template()
     */
    public function fileUploadBasicDeleteAction($file)
    {
    	$path = __DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic/';
    	//$path = $this->get('kernel')->getRootDir(). '/../web/bundles/applicationbootstrap/uploads/basic/';
    	
	    if (file_exists($path . $file)) {
	        unlink($path . $file);
	        $this->get('session')->getFlashBag()->add('contact-success',  sprintf('Plik: '.$file.' pomyśłnie usunięto!'));
	    }else{
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Błąd.'));
	    }
	    
	    return $this->redirect($this->generateUrl('_file-upload-basic'));
    }
    
    /**
     * @Route("/file-upload-basic/{file}/download", name="_file-upload-basic-download")
     * @Template()
     */
    public function fileUploadBasicDownloadAction($file)
    {
    	$path = __DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic/';
    	//$path = $this->get('kernel')->getRootDir(). '/../web/bundles/applicationbootstrap/uploads/basic/';
    	
	    if (file_exists($path . $file)) {
	        $content = file_get_contents($path . $file);
	
	        $response = new Response();
	        $response->headers->set('Content-Type', 'text/csv');
	        $response->headers->set('Content-Disposition', 'attachment;filename="'.$file);
	        $response->setContent($content);
	    }else{
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Błąd.'));
	    }
	    
	    //return $this->redirect($this->generateUrl('_file-upload-basic'));
	    //return new Response('', 200, array('X-Accel-Redirect' => $path . $file));
	    return $response;
    }
    
    /**
     * @Route("/file-upload-basic-multiple", name="_file-upload-basic-multiple")
     * @Template()
     */
    public function fileUploadBasicMultipleAction()
    {
    	
        //$query = $this->getRequest()->get('img');
        $path = __DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic/';
        //$path = $this->get('kernel')->getRootDir(). '/../web/bundles/applicationbootstrap/uploads/basic/';
    	
    	$request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        	
        	$img_success = array();
        	$img_warning = array();
	        $img_error = array();
	        
	        foreach ($_FILES["images"]["error"] as $key => $error) {
			    if ($error == UPLOAD_ERR_OK) {
			    	if (file_exists($path . $_FILES['images']['name'][$key])){
			    		$img_warning[] = $_FILES["images"]["name"][$key];
			    		$this->get('session')->getFlashBag()->add('contact-warning',  sprintf('Plik: '.$_FILES['images']['name'][$key].' już został dodany.'));
			    	}else{
			    		move_uploaded_file($_FILES["images"]["tmp_name"][$key], $path . $_FILES["images"]["name"][$key]);
			            $img_success[] = $_FILES["images"]["name"][$key];
			            //$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Dodano: '.$_FILES['images']['name'][$key]));
			    	}
			    }else{
			        $img_error[] = $_FILES["images"]["name"][$key];
			        //$this->get('session')->getFlashBag()->add('contact-error',  sprintf('Wybierz plik.'));
			    }
	        }
	        if(!empty($img_success)){
	            $this->get('session')->getFlashBag()->add('contact-success',  sprintf('Liczba dodanych plików: '.count($img_success)));
	        }
	        if(!empty($img_error)){
	            $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Liczba utraconych plików: '.count($img_error) ));
	        }
        }
        
        $dir_handle = @opendir($path) or die("Nie moge wczytać");
         
		$files = array();
        while ($file = readdir($dir_handle)) {
        	if($file == "." || $file == ".." || $file == ".svn" || $file == "index.php" )
        	continue;
			$files[] = $file;
		}
		closedir($dir_handle); 

        return array('files' => $files);
    }
    
    /**
     * @Route("/file-upload-basic-multiple/{file}/delete", name="_file-upload-basic-multiple-delete")
     * @Template()
     */
    public function fileUploadBasicMultipleDeleteAction($file)
    {
    	$path = __DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic/';
    	//$path = $this->get('kernel')->getRootDir(). '/../web/bundles/applicationbootstrap/uploads/basic/';
    	
	    if (file_exists($path . $file)) {
	        unlink($path . $file);
	        $this->get('session')->getFlashBag()->add('contact-success',  sprintf('Plik: '.$file.' pomyśłnie usunięto!'));
	    }else{
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Błąd.'));
	    }
	    
	    return $this->redirect($this->generateUrl('_file-upload-basic-multiple'));
    }
    
    /**
     * @Route("/file-upload-basic-multiple/{file}/download", name="_file-upload-basic-multiple-download")
     * @Template()
     */
    public function fileUploadBasicMultipleDownloadAction($file)
    {
    	$path = __DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic/';
    	//$path = $this->get('kernel')->getRootDir(). '/../web/bundles/applicationbootstrap/uploads/basic/';
    	
	    if (file_exists($path . $file)) {
	        $content = file_get_contents($path . $file);
	
	        $response = new Response();
	        $response->headers->set('Content-Type', 'text/csv');
	        $response->headers->set('Content-Disposition', 'attachment;filename="'.$file);
	        $response->setContent($content);
	    }else{
	        $this->get('session')->getFlashBag()->add('contact-error',  sprintf('Błąd.'));
	    }
	    
	    //return $this->redirect($this->generateUrl('_file-upload-basic'));
	    //return new Response('', 200, array('X-Accel-Redirect' => $path . $file));
	    return $response;
    }
    
    /**
     * @Route("/file-upload-entity", name="_file-upload-entity")
     * @Template()
     */
    public function fileUploadEntityAction()
    {
	    $entity = new FileUpload();
	    $form = $this->createForm(new FileUploadType(), $entity);

	    if ($this->getRequest()->isMethod('POST')) {
	        $form->bind($this->getRequest());
	        if ($form->isValid()) {
	            //$em = $this->getDoctrine()->getManager();
	
		        if($entity->getFile()){
	            	$entity->getFile()->move(__DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic', $entity->getFile()->getClientOriginalName());
	            	$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Dodano nowy plik: '.$entity->getFile()->getClientOriginalName()));
	            }
	        	
	            //$em->persist($entity);
	            //$em->flush();
	            return $this->redirect($this->generateUrl('_file-upload-entity'));
	        }
	    }
	    
	    $dir_handle = @opendir(__DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic') or die("Nie moge wczytać");
         
		$files = array();
        while ($file = readdir($dir_handle)) {
        	if($file == "." || $file == ".." || $file == ".svn" || $file == "index.php" )
        	continue;
			$files[] = $file;
		}
		closedir($dir_handle); 
	
	    return array(
	    	'files' => $files,
	    	'form' => $form->createView());
    }
    
    /**
     * @Route("/file-upload-entity-multiple", name="_file-upload-entity-multiple")
     * @Template()
     */
    public function fileUploadEntityMultipleAction()
    {
	    $entity = new FileUploadMultiple();
	    $form = $this->createForm(new FileUploadMultipleType(), $entity);
        
	    if ($this->getRequest()->isMethod('POST')) {
	        $form->bind($this->getRequest());
	        if ($form->isValid()) {
	            //$em = $this->getDoctrine()->getManager();
		        if($entity->getFiles()){
	            	//$form['files']->getData()->move(...);
		        	$entity->getFiles()->move(__DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic', $entity->getFiles()->getClientOriginalName());
	            	$this->get('session')->getFlashBag()->add('contact-success',  sprintf('Dodano nowy plik: '.$entity->getFiles()->getClientOriginalName()));
	            }
	        	
	            //$em->persist($entity);
	            //$em->flush();
	            //return $this->redirect($this->generateUrl('_file-upload-entity-multiple'));
	        }
	    }
	    
	    $dir_handle = @opendir(__DIR__.'/../../../../web/bundles/applicationbootstrap/uploads/basic') or die("Nie moge wczytać");
         
		$files = array();
        while ($file = readdir($dir_handle)) {
        	if($file == "." || $file == ".." || $file == ".svn" || $file == "index.php" )
        	continue;
			$files[] = $file;
		}
		closedir($dir_handle); 
	
	    return array(
	    	'files' => $files,
	    	'form' => $form->createView());
    }
    
    /**
     * @Route("/file-upload-dropzone", name="_file-upload-dropzone")
     * @Template()
     */
    public function fileUploadDropzoneAction()
    {
        return array();
    }
    
    /**
     * @Route("/file-upload-dropzone-bootstrop", name="_file-upload-dropzone-bootstrop")
     * @Template()
     */
    public function fileUploadDropzoneBootstropAction()
    {
        return array();
    }
    
    /**
     * @Route("/file-upload-jquery-ui-bootstrop-basic", name="_file-upload-jquery-ui-bootstrop-basic")
     * @Template()
     */
    public function fileUploadjQueryUiBootstropBasicAction()
    {
        return array();
    }
    
    /**
     * @Route("/file-upload-jquery-ui-bootstrop-basic-plus", name="_file-upload-jquery-ui-bootstrop-basic-plus")
     * @Template()
     */
    public function fileUploadjQueryUiBootstropBasicPlusAction()
    {
        return array();
    }
    
    /**
     * @Route("/file-upload-jquery-ui-bootstrop-basic-plus-ui", name="_file-upload-jquery-ui-bootstrop-basic-plus-ui")
     * @Template()
     */
    public function fileUploadjQueryUiBootstropBasicPlusUiAction()
    {
        return array();
    }
    /**
     * @Route("/file-upload-jquery-ui-bootstrop-angularjs", name="_file-upload-jquery-ui-bootstrop-angularjs")
     * @Template()
     */
    public function fileUploadjQueryUiBootstropBasicAngularJSAction()
    {
        return array();
    }
}