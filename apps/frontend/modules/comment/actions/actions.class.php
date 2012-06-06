<?php

/**
 * comment actions.
 *
 * @package    blog
 * @subpackage comment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->blog_commentss = Doctrine_Core::getTable('blogComments')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->blog_comments = Doctrine_Core::getTable('blogComments')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->blog_comments);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new blogCommentsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new blogCommentsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($blog_comments = Doctrine_Core::getTable('blogComments')->find(array($request->getParameter('id'))), sprintf('Object blog_comments does not exist (%s).', $request->getParameter('id')));
    $this->form = new blogCommentsForm($blog_comments);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($blog_comments = Doctrine_Core::getTable('blogComments')->find(array($request->getParameter('id'))), sprintf('Object blog_comments does not exist (%s).', $request->getParameter('id')));
    $this->form = new blogCommentsForm($blog_comments);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($blog_comments = Doctrine_Core::getTable('blogComments')->find(array($request->getParameter('id'))), sprintf('Object blog_comments does not exist (%s).', $request->getParameter('id')));
    $blog_comments->delete();

    $this->redirect('comment/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $blog_comments = $form->save();

      $this->redirect('comment/edit?id='.$blog_comments->getId());
    }
  }
}
