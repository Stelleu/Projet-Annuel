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

namespace Google\Service\SQLAdmin;

class ImportContextCsvImportOptions extends \Google\Collection
{
  protected $collection_key = 'columns';
  /**
   * @var string[]
   */
  public $columns;
  /**
   * @var string
   */
  public $escapeCharacter;
  /**
   * @var string
   */
  public $fieldsTerminatedBy;
  /**
   * @var string
   */
  public $linesTerminatedBy;
  /**
   * @var string
   */
  public $quoteCharacter;
  /**
   * @var string
   */
  public $table;

  /**
   * @param string[]
   */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /**
   * @return string[]
   */
  public function getColumns()
  {
    return $this->columns;
  }
  /**
   * @param string
   */
  public function setEscapeCharacter($escapeCharacter)
  {
    $this->escapeCharacter = $escapeCharacter;
  }
  /**
   * @return string
   */
  public function getEscapeCharacter()
  {
    return $this->escapeCharacter;
  }
  /**
   * @param string
   */
  public function setFieldsTerminatedBy($fieldsTerminatedBy)
  {
    $this->fieldsTerminatedBy = $fieldsTerminatedBy;
  }
  /**
   * @return string
   */
  public function getFieldsTerminatedBy()
  {
    return $this->fieldsTerminatedBy;
  }
  /**
   * @param string
   */
  public function setLinesTerminatedBy($linesTerminatedBy)
  {
    $this->linesTerminatedBy = $linesTerminatedBy;
  }
  /**
   * @return string
   */
  public function getLinesTerminatedBy()
  {
    return $this->linesTerminatedBy;
  }
  /**
   * @param string
   */
  public function setQuoteCharacter($quoteCharacter)
  {
    $this->quoteCharacter = $quoteCharacter;
  }
  /**
   * @return string
   */
  public function getQuoteCharacter()
  {
    return $this->quoteCharacter;
  }
  /**
   * @param string
   */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /**
   * @return string
   */
  public function getTable()
  {
    return $this->table;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportContextCsvImportOptions::class, 'Google_Service_SQLAdmin_ImportContextCsvImportOptions');
