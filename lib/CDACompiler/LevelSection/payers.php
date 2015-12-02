<?php

/**
 * 2.52	Payers Section (V2)
 *
 * The Payers section contains data on the patient’s payers, whether a ‘third party’ insurance, self-pay,
 * other payer or guarantor, or some combination of payers, and is used to define which entity is the responsible
 * fiduciary for the financial aspects of a patient’s care.
 *
 * Each unique instance of a payer and all the pertinent data needed to contact, bill to, and collect from that
 * payer should be included. Authorization information that can be used to define pertinent referral, authorization
 * tracking number, procedure, therapy, intervention, device, or similar authorizations for the patient or provider,
 * or both should be included. At a minimum, the patient’s pertinent current payment sources should be listed.
 *
 * The sources of payment are represented as a Coverage Activity, which identifies all of the insurance policies or
 * government or other programs that cover some or all of the patient's healthcare expenses. The policies or
 * programs are sequenced by preference. The Coverage Activity has a sequence number that represents the
 * preference order. Each policy or program identifies the covered party with respect to the payer, so that the
 * identifiers can be recorded.
 *
 * Contains:
 * Coverage Activity (V2)
 *
 */

namespace LevelSection;

use LevelEntry;
use Exception;

class payers
{
    /**
     * @param $Data
     * @throws Exception
     */
    private static function Validate($Data)
    {
    }

    /**
     * Build the Narrative part of this section
     * @param $Data
     */
    public static function Narrative($Data)
    {

    }

    /**
     * @return array
     */
    public static function Structure()
    {
        return [
        ];
    }

    /**
     * @param $Data
     * @return array|Exception
     */
    public static function Insert($Data)
    {
        try
        {
            // Validate first
            self::Validate($Data['Payers']);

            $Section = [
                'component' => [
                    'section' => [
                        'templateId' => [
                            '@attributes' => [
                                'root' => '2.16.840.1.113883.10.20.22.2.18.2'
                            ]
                        ],
                        'code' => [
                            '@attributes' => [
                                'code' => '48768-6',
                                'displayName' => 'Payers',
                                'codeSystem' => '2.16.840.1.113883.6.1',
                                'codeSystemName' => 'LOINC'
                            ]
                        ],
                        'title' => 'Payers',
                        'text' => self::Narrative($Data['Payers'])
                    ]
                ]
            ];

            // Coverage Activity (V2)
            // ...

            return $Section;
        }
        catch (Exception $Error)
        {
            return $Error;
        }
    }

}