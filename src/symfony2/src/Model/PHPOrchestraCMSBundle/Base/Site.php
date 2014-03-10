<?php

namespace Model\PHPOrchestraCMSBundle\Base;

/**
 * Base class of Model\PHPOrchestraCMSBundle\Site document.
 */
abstract class Site extends \Mandango\Document\Document
{
    /**
     * Initializes the document defaults.
     */
    public function initializeDefaults()
    {
    }

    /**
     * Set the document data (hydrate).
     *
     * @param array $data  The document data.
     * @param bool  $clean Whether clean the document.
     *
     * @return \Model\PHPOrchestraCMSBundle\Site The document (fluent interface).
     */
    public function setDocumentData($data, $clean = false)
    {
        if ($clean) {
            $this->data = array();
            $this->fieldsModified = array();
        }

        if (isset($data['_query_hash'])) {
            $this->addQueryHash($data['_query_hash']);
        }
        if (isset($data['_id'])) {
            $this->setId($data['_id']);
            $this->setIsNew(false);
        }
        if (isset($data['site_id'])) {
            $this->data['fields']['site_id'] = (int) $data['site_id'];
        } elseif (isset($data['_fields']['site_id'])) {
            $this->data['fields']['site_id'] = null;
        }
        if (isset($data['domain'])) {
            $this->data['fields']['domain'] = (string) $data['domain'];
        } elseif (isset($data['_fields']['domain'])) {
            $this->data['fields']['domain'] = null;
        }
        if (isset($data['language'])) {
            $this->data['fields']['language'] = (string) $data['language'];
        } elseif (isset($data['_fields']['language'])) {
            $this->data['fields']['language'] = null;
        }

        return $this;
    }

    /**
     * Set the "site_id" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\Site The document (fluent interface).
     */
    public function setSite_id($value)
    {
        if (!isset($this->data['fields']['site_id'])) {
            if (!$this->isNew()) {
                $this->getSite_id();
                if ($this->isFieldEqualTo('site_id', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['site_id'] = null;
                $this->data['fields']['site_id'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('site_id', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['site_id']) && !array_key_exists('site_id', $this->fieldsModified)) {
            $this->fieldsModified['site_id'] = $this->data['fields']['site_id'];
        } elseif ($this->isFieldModifiedEqualTo('site_id', $value)) {
            unset($this->fieldsModified['site_id']);
        }

        $this->data['fields']['site_id'] = $value;

        return $this;
    }

    /**
     * Returns the "site_id" field.
     *
     * @return mixed The $name field.
     */
    public function getSite_id()
    {
        if (!isset($this->data['fields']['site_id'])) {
            if ($this->isNew()) {
                $this->data['fields']['site_id'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('site_id', $this->data['fields'])) {
                $this->addFieldCache('site_id');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('site_id' => 1));
                if (isset($data['site_id'])) {
                    $this->data['fields']['site_id'] = (int) $data['site_id'];
                } else {
                    $this->data['fields']['site_id'] = null;
                }
            }
        }

        return $this->data['fields']['site_id'];
    }

    /**
     * Set the "domain" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\Site The document (fluent interface).
     */
    public function setDomain($value)
    {
        if (!isset($this->data['fields']['domain'])) {
            if (!$this->isNew()) {
                $this->getDomain();
                if ($this->isFieldEqualTo('domain', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['domain'] = null;
                $this->data['fields']['domain'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('domain', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['domain']) && !array_key_exists('domain', $this->fieldsModified)) {
            $this->fieldsModified['domain'] = $this->data['fields']['domain'];
        } elseif ($this->isFieldModifiedEqualTo('domain', $value)) {
            unset($this->fieldsModified['domain']);
        }

        $this->data['fields']['domain'] = $value;

        return $this;
    }

    /**
     * Returns the "domain" field.
     *
     * @return mixed The $name field.
     */
    public function getDomain()
    {
        if (!isset($this->data['fields']['domain'])) {
            if ($this->isNew()) {
                $this->data['fields']['domain'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('domain', $this->data['fields'])) {
                $this->addFieldCache('domain');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('domain' => 1));
                if (isset($data['domain'])) {
                    $this->data['fields']['domain'] = (string) $data['domain'];
                } else {
                    $this->data['fields']['domain'] = null;
                }
            }
        }

        return $this->data['fields']['domain'];
    }

    /**
     * Set the "language" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\Site The document (fluent interface).
     */
    public function setLanguage($value)
    {
        if (!isset($this->data['fields']['language'])) {
            if (!$this->isNew()) {
                $this->getLanguage();
                if ($this->isFieldEqualTo('language', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['language'] = null;
                $this->data['fields']['language'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('language', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['language']) && !array_key_exists('language', $this->fieldsModified)) {
            $this->fieldsModified['language'] = $this->data['fields']['language'];
        } elseif ($this->isFieldModifiedEqualTo('language', $value)) {
            unset($this->fieldsModified['language']);
        }

        $this->data['fields']['language'] = $value;

        return $this;
    }

    /**
     * Returns the "language" field.
     *
     * @return mixed The $name field.
     */
    public function getLanguage()
    {
        if (!isset($this->data['fields']['language'])) {
            if ($this->isNew()) {
                $this->data['fields']['language'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('language', $this->data['fields'])) {
                $this->addFieldCache('language');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('language' => 1));
                if (isset($data['language'])) {
                    $this->data['fields']['language'] = (string) $data['language'];
                } else {
                    $this->data['fields']['language'] = null;
                }
            }
        }

        return $this->data['fields']['language'];
    }

    private function isFieldEqualTo($field, $otherValue)
    {
        $value = $this->data['fields'][$field];

        return $this->isFieldValueEqualTo($value, $otherValue);
    }

    private function isFieldModifiedEqualTo($field, $otherValue)
    {
        $value = $this->fieldsModified[$field];

        return $this->isFieldValueEqualTo($value, $otherValue);
    }

    protected function isFieldValueEqualTo($value, $otherValue)
    {
        if (is_object($value)) {
            return $value == $otherValue;
        }

        return $value === $otherValue;
    }

    /**
     * Process onDelete.
     */
    public function processOnDelete()
    {
    }

    private function processOnDeleteCascade($class, array $criteria)
    {
        $repository = $this->getMandango()->getRepository($class);
        $documents = $repository->createQuery($criteria)->all();
        if (count($documents)) {
            $repository->delete($documents);
        }
    }

    private function processOnDeleteUnset($class, array $criteria, array $update)
    {
        $this->getMandango()->getRepository($class)->update($criteria, $update, array('multiple' => true));
    }

    /**
     * Set a document data value by data name as string.
     *
     * @param string $name  The data name.
     * @param mixed  $value The value.
     *
     * @return mixed the data name setter return value.
     *
     * @throws \InvalidArgumentException If the data name is not valid.
     */
    public function set($name, $value)
    {
        if ('site_id' == $name) {
            return $this->setSite_id($value);
        }
        if ('domain' == $name) {
            return $this->setDomain($value);
        }
        if ('language' == $name) {
            return $this->setLanguage($value);
        }

        throw new \InvalidArgumentException(sprintf('The document data "%s" is not valid.', $name));
    }

    /**
     * Returns a document data by data name as string.
     *
     * @param string $name The data name.
     *
     * @return mixed The data name getter return value.
     *
     * @throws \InvalidArgumentException If the data name is not valid.
     */
    public function get($name)
    {
        if ('site_id' == $name) {
            return $this->getSite_id();
        }
        if ('domain' == $name) {
            return $this->getDomain();
        }
        if ('language' == $name) {
            return $this->getLanguage();
        }

        throw new \InvalidArgumentException(sprintf('The document data "%s" is not valid.', $name));
    }

    /**
     * Imports data from an array.
     *
     * @param array $array An array.
     *
     * @return \Model\PHPOrchestraCMSBundle\Site The document (fluent interface).
     */
    public function fromArray(array $array)
    {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        }
        if (isset($array['site_id'])) {
            $this->setSite_id($array['site_id']);
        }
        if (isset($array['domain'])) {
            $this->setDomain($array['domain']);
        }
        if (isset($array['language'])) {
            $this->setLanguage($array['language']);
        }

        return $this;
    }

    /**
     * Export the document data to an array.
     *
     * @param Boolean $withReferenceFields Whether include the fields of references or not (false by default).
     *
     * @return array An array with the document data.
     */
    public function toArray($withReferenceFields = false)
    {
        $array = array('id' => $this->getId());

        $array['site_id'] = $this->getSite_id();
        $array['domain'] = $this->getDomain();
        $array['language'] = $this->getLanguage();

        return $array;
    }

    /**
     * Query for save.
     */
    public function queryForSave()
    {
        $isNew = $this->isNew();
        $query = array();
        $reset = false;

        if (isset($this->data['fields'])) {
            if ($isNew || $reset) {
                if (isset($this->data['fields']['site_id'])) {
                    $query['site_id'] = (int) $this->data['fields']['site_id'];
                }
                if (isset($this->data['fields']['domain'])) {
                    $query['domain'] = (string) $this->data['fields']['domain'];
                }
                if (isset($this->data['fields']['language'])) {
                    $query['language'] = (string) $this->data['fields']['language'];
                }
            } else {
                if (isset($this->data['fields']['site_id']) || array_key_exists('site_id', $this->data['fields'])) {
                    $value = $this->data['fields']['site_id'];
                    $originalValue = $this->getOriginalFieldValue('site_id');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['site_id'] = (int) $this->data['fields']['site_id'];
                        } else {
                            $query['$unset']['site_id'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['domain']) || array_key_exists('domain', $this->data['fields'])) {
                    $value = $this->data['fields']['domain'];
                    $originalValue = $this->getOriginalFieldValue('domain');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['domain'] = (string) $this->data['fields']['domain'];
                        } else {
                            $query['$unset']['domain'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['language']) || array_key_exists('language', $this->data['fields'])) {
                    $value = $this->data['fields']['language'];
                    $originalValue = $this->getOriginalFieldValue('language');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['language'] = (string) $this->data['fields']['language'];
                        } else {
                            $query['$unset']['language'] = 1;
                        }
                    }
                }
            }
        }
        if (true === $reset) {
            $reset = 'deep';
        }

        return $query;
    }

    /**
     * Maps the validation.
     *
     * @param \Symfony\Component\Validator\Mapping\ClassMetadata $metadata The metadata class.
     */
    static public function loadValidatorMetadata(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata)
    {
        $validation = array(
            'constraints' => array(

            ),
            'getters' => array(

            ),
        );

        foreach (\Mandango\MandangoBundle\Extension\DocumentValidation::parseNodes($validation['constraints']) as $constraint) {
            $metadata->addConstraint($constraint);
        }

        foreach ($validation['getters'] as $getter => $constraints) {
            foreach (\Mandango\MandangoBundle\Extension\DocumentValidation::parseNodes($constraints) as $constraint) {
                $metadata->addGetterConstraint($getter, $constraint);
            }
        }

        return true;
    }
}