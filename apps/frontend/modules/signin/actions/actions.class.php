<?php

/**
 * signin actions.
 *
 * @package    blog
 * @subpackage signin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class signinActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->blog_userss = Doctrine_Core::getTable('blogUsers')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->blog_users = Doctrine_Core::getTable('blogUsers')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->blog_users);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new blogUsersForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new blogUsersForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($blog_users = Doctrine_Core::getTable('blogUsers')->find(array($request->getParameter('id'))), sprintf('Object blog_users does not exist (%s).', $request->getParameter('id')));
    $this->form = new blogUsersForm($blog_users);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($blog_users = Doctrine_Core::getTable('blogUsers')->find(array($request->getParameter('id'))), sprintf('Object blog_users does not exist (%s).', $request->getParameter('id')));
    $this->form = new blogUsersForm($blog_users);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($blog_users = Doctrine_Core::getTable('blogUsers')->find(array($request->getParameter('id'))), sprintf('Object blog_users does not exist (%s).', $request->getParameter('id')));
    $blog_users->delete();

    $this->redirect('signin/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $blog_users = $form->save();

      $this->redirect('signin/edit?id='.$blog_users->getId());
    }
  }
}
