<!--
/* * *******************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the MIT license (MIT) included in the original distribution.
 *  Copyright (c) 2014, 2015, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC Contact Center + Siebel Case Management Accelerator
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.5 (May 2015)
 *  Siebel release: 8.1.1.15
 *  reference: 141216-000121
 *  date: Wed Sep  2 23:14:36 PDT 2015

 *  revision: rnw-15-8-fixes-release-01
 *  SHA1: $Id: c2a6f34399dc6fe194b26d1a912002ac33cf7bc9 $
 * *********************************************************************************************
 *  File: view.php
 * ****************************************************************************************** */
-->
<div id="rn_<?= $this->instanceID; ?>" class="<?= $this->classList ?>">
    <rn:block id="top"/>
    <div id="rn_<?= $this->instanceID; ?>_Alert" role="alert" class="rn_ScreenReaderOnly"></div>
    <rn:block id="preLoadingIndicator"/>
    <div id="rn_<?= $this->instanceID; ?>_Loading"></div>
        
    <div id="rn_<?= $this->instanceID; ?>_Content" class="yui3-skin-sam"></div>

    <rn:block id="bottom"/>
</div>
