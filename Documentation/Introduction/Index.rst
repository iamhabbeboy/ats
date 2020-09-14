﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _introduction-manual:

Introduction
=============

.. only:: html

	This chapter describes the features and typical use cases of the ats extension


Applicant Tracking System (ATS)
-------------------------------

The ATS is a highly customizable enterprise application tracking system based on Extbase & Fluid.

It provides management of job offers and job applications, allowing for complex job application workflows involving numerous roles as they are required in environments of universities as well as private and public companies.

Jobs
^^^^

Jobs may be created and edited by authorized backend users. By creating jobs in different sysfolders they may be seen in the frontend in different places, e.g. for different categories. They even may be distributed to different TYPO3 installations, if applicable.

For each job the authorized user may assign distinct users from the personal department and distinct organizational units who will be involved in the matching process for applications to this job.

Users & Roles
^^^^^^^^^^^^^

There are several roles that can be configured by creating backend user groups.

The two most important roles are:

- personal department
- organizational department

Other possible roles may be required according to german laws are:

- "Gleichstellungsbeauftragter"
- "Beauftragter für Schwerbehinderte Mitarbeiter"
- "Betriebsrat" (private companies) respectively "Personalrat" (public companies)

Communication with Applicants
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

During the application process the email address of applicants gets verified by a double opt in (DOI) process.

Thus later on the applicant may easily be contacted out of the ats by email, supported by various text templates that may be created specificaly for the employer.

Alternatively all text templates may be converted to PDFs following the employers corporate design (with logo etc.) that may be printed for more formal communication via letter mail.

Application Form
^^^^^^^^^^^^^^^^

The application form consists of several tabs in order to improve usability by categorizing data.

Some data is mandatory, other data is optional. The upload of several documents like a CV ist possible. The option to login is optional. This can be useful
for when the applicant needs several sessions to complete their application.

There is two possible application forms: a long one, and a shorter one. By default, the shorter one is active. 
If you want to change that, you have to change the constant ``simpleForm`` 

Rolling out the ats at your organization - Human Factors
--------------------------------------------------------

Besides all technical aspects, human factors should not be underestimated when introducing the ats to a company. Switching to an ats imposes a tremendous change in workflows - an although it will make live easier for all participants, many people fear changes and might behave critically about the new system.

Make sure to get involved all stakeholders in an early planning phase. The authors of this extension have a lot of experience in introducing application tracking systems at large companies and universities and will be happy to offer consultancy service for introducing the ats to your organization.
