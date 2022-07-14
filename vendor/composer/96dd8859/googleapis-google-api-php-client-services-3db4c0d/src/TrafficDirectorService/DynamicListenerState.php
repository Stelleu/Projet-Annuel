<?php
/*
 * Copyright 2014 Google Inc.
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

namespace Google\Service\TrafficDirectorService;

class DynamicListenerState extends \Google\Model
{
  /**
   * @var string
   */
  public $lastUpdated;
  /**
   * @var array[]
   */
  public $listener;
  /**
   * @var string
   */
  public $versionInfo;

  /**
   * @param string
   */
  public function setLastUpdated($lastUpdated)
  {
    $this->lastUpdated = $lastUpdated;
  }
  /**
   * @return string
   */
  public function getLastUpdated()
  {
    return $this->lastUpdated;
  }
  /**
   * @param array[]
   */
  public function setListener($listener)
  {
    $this->listener = $listener;
  }
  /**
   * @return array[]
   */
  public function getListener()
  {
    return $this->listener;
  }
  /**
   * @param string
   */
  public function setVersionInfo($versionInfo)
  {
    $this->versionInfo = $versionInfo;
  }
  /**
   * @return string
   */
  public function getVersionInfo()
  {
    return $this->versionInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DynamicListenerState::class, 'Google_Service_TrafficDirectorService_DynamicListenerState');
