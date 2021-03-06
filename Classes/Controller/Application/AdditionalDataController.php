<?php
namespace PAGEmachine\Ats\Controller\Application;

use PAGEmachine\Ats\Domain\Model\ApplicationD;
use PAGEmachine\Ats\Domain\Repository\ApplicationDRepository;

/*
 * This file is part of the PAGEmachine ATS project.
 */

/**
 * AdditionalDataController (Fourth Step)
 */
class AdditionalDataController extends AbstractApplicationController
{
    /**
     * @var ApplicationDRepository
     */
    protected $repository = null;

    /**
     * @param  ApplicationDRepository $repository
     */
    public function injectRepository(ApplicationDRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param  ApplicationD $application
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("application")
     * @ignorevalidation $application
     * @return void
     */
    public function editAdditionalDataAction(ApplicationD $application)
    {

        $this->view->assign("application", $application);
    }

    /**
     *
     * @param  ApplicationD $application
     * @validate $application \PAGEmachine\Ats\Domain\Validator\TypoScriptValidator
     * @return void
     */
    public function updateAdditionalDataAction(ApplicationD $application)
    {

        $this->repository->addOrUpdate($application);
        $this->forward("editUpload", "Application\\Upload", null, ['application' => $application->getUid()]);
    }
}
