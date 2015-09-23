<?php
/**
 * GaiaEHR (Electronic Health Records)
 * Copyright (C) 2013 Certun, LLC.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace modules\reportcenter\dataProvider;

class AutomatedMeasureCalculation extends Reports{

    /**
     * getProblemListMeasure
     * Method to generate the data for Problem List
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1) : Default is 1
     * No Stage 2 Measure - Same as 1
     */
    function getProblemListMeasure($Parameters = null, $Stage = 1){

    }

    /**
     * getMedicationListMeasure
     * Method to generate the data for Medication List
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1) : Default is 1
     * No Stage 2 Measure - Same as 1
     */
    function getMedicationListMeasure($Parameters = null, $Stage = 1){

    }

    /**
     * getMedicationAllergyListMeasure
     * Method to generate the data for Medication Allergy List
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1) : Default is 1
     * No Stage 2 Measure - Same as 1
     */
    function getMedicationAllergyListMeasure($Parameters = null, $Stage = 1){

    }

    /**
     * getCPOEMeasure
     * Method to generate the data for CPOE
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getCPOEMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * geteRXMeasure
     * Method to generate the data for eRX
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function geteRXMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getDemographicsMeasure
     * Method to generate the data for Demographics
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getDemographicsMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getVitalSignsMeasure
     * Method to generate the data for Vital Signs
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getVitalSignsMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getSmokingStatusMeasure
     * Method to generate the data for Smoking Status
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getSmokingStatusMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getLabResultsMeasure
     * Method to generate the data for Lab Results
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getLabResultsMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getProblemList
     * Method to generate the data for Problem List
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getPatientRemindersMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getViewDownloadTransmitMeasure
     * Method to generate the data for View Download & Transmit
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getViewDownloadTransmitMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getClinicalSummaryMeasure
     * Method to generate the data for Clinical Summary
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getClinicalSummaryMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getPatientEducationMeasure
     * Method to generate the data for Patient Education
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getPatientEducationMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getMedicationReconciliationMeasure
     * Method to generate the data for Medication Reconciliation
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getMedicationReconciliationMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getSummaryOfCareMeasure
     * Method to generate the data for Summary Of Care
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getSummaryOfCareMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getSecureMessagingMeasure
     * Method to generate the data for Secure Messaging
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getSecureMessagingMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getImagingMeasure
     * Method to generate the data for Imaging
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getImagingMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getFamilyHistoryMeasure
     * Method to generate the data for Family History
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getFamilyHistoryMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * geteNotesMeasure
     * Method to generate the data for eNotes
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function geteNotesMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getAdvanceDirectivesMeasure
     * Method to generate the data for Advance Directives
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getAdvanceDirectivesMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * getLabEHtoEPMeasure
     * Method to generate the data for Lab EH to EP
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function getLabEHtoEPMeasure($Parameters = null, $Stage = 2){

    }

    /**
     * eMarMeasure
     * Method to generate the data for eMar
     * @param null $Parameters
     * @param int $Stage : Selection of the stage data to generate (1 or 2) : Default is 2
     */
    function eMarMeasure($Parameters = null, $Stage = 2){

    }

}