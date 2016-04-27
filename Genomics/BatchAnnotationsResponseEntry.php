<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Genomics_BatchAnnotationsResponseEntry extends Google_Model
{
  protected $annotationType = 'Google_Service_Genomics_Annotation';
  protected $annotationDataType = '';
  protected $statusType = 'Google_Service_Genomics_BatchAnnotationsResponseEntryStatus';
  protected $statusDataType = '';

  public function setAnnotation(Google_Service_Genomics_Annotation $annotation)
  {
    $this->annotation = $annotation;
  }
  public function getAnnotation()
  {
    return $this->annotation;
  }
  public function setStatus(Google_Service_Genomics_BatchAnnotationsResponseEntryStatus $status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}