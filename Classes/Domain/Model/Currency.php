<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (CS)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

class Currency extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameCs = '';
    /**
     * @var string
     */
    protected $subdivisionNameCs = '';

    /**
     * @return string
     */
    public function getNameCs(): string
    {
        return $this->nameCs;
    }

    /**
     * @param string $nameCs
     */
    public function setNameCs(string $nameCs)
    {
        $this->nameCs = $nameCs;
    }

    /**
     * @return string
     */
    public function getSubdivisionNameCs(): string
    {
        return $this->subdivisionNameCs;
    }

    /**
     * @param string $subdivisionNameCs
     */
    public function setSubdivisionNameCs(string $subdivisionNameCs)
    {
        $this->subdivisionNameCs = $subdivisionNameCs;
    }
}
