<?php

/* * *******************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the MIT license (MIT) included in the original distribution.
 *  Copyright (c) 2014, 2015, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC + EBS Enhancement
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.5 (May 2015)
 *  EBS release: 12.1.3
 *  reference: 150202-000157
 *  date: Wed Sep  2 23:11:33 PDT 2015

 *  revision: rnw-15-8-fixes-release-01
 *  SHA1: $Id: c81b18bc5a4928353a48240882e916d409002b97 $
 * *********************************************************************************************
 *  File: controller.php
 * ****************************************************************************************** */

namespace Custom\Widgets\EbsServiceRequest;

class SrFieldDisplay extends \RightNow\Libraries\Widget\Base {

    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
        $fieldName = $this->data['attrs']['name'];
        $fieldKey = explode('.', $fieldName);
        if ($fieldKey[0] !== 'SR') {
            echo $this->reportError('Only support Service Request field display');
            return false;
        }

        // render to js
        $this->data['js']['name'] = $fieldKey[1];
        $this->data['js']['label'] = $this->data['attrs']['label'];
    }

}
