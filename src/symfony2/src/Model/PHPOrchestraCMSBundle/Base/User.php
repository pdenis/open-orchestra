<?php

namespace Model\PHPOrchestraCMSBundle\Base;

/**
 * Base class of Model\PHPOrchestraCMSBundle\User document.
 */
abstract class User extends \Mandango\Document\Document
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
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
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
        if (isset($data['login'])) {
            $this->data['fields']['login'] = (string) $data['login'];
        } elseif (isset($data['_fields']['login'])) {
            $this->data['fields']['login'] = null;
        }
        if (isset($data['hash'])) {
            $this->data['fields']['hash'] = (string) $data['hash'];
        } elseif (isset($data['_fields']['hash'])) {
            $this->data['fields']['hash'] = null;
        }
        if (isset($data['salt'])) {
            $this->data['fields']['salt'] = (string) $data['salt'];
        } elseif (isset($data['_fields']['salt'])) {
            $this->data['fields']['salt'] = null;
        }
        if (isset($data['first_name'])) {
            $this->data['fields']['first_name'] = (string) $data['first_name'];
        } elseif (isset($data['_fields']['first_name'])) {
            $this->data['fields']['first_name'] = null;
        }
        if (isset($data['last_name'])) {
            $this->data['fields']['last_name'] = (string) $data['last_name'];
        } elseif (isset($data['_fields']['last_name'])) {
            $this->data['fields']['last_name'] = null;
        }
        if (isset($data['email'])) {
            $this->data['fields']['email'] = (string) $data['email'];
        } elseif (isset($data['_fields']['email'])) {
            $this->data['fields']['email'] = null;
        }
        if (isset($data['addresses'])) {
            $this->data['fields']['addresses'] = (string) $data['addresses'];
        } elseif (isset($data['_fields']['addresses'])) {
            $this->data['fields']['addresses'] = null;
        }

        return $this;
    }

    /**
     * Set the "login" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function setLogin($value)
    {
        if (!isset($this->data['fields']['login'])) {
            if (!$this->isNew()) {
                $this->getLogin();
                if ($this->isFieldEqualTo('login', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['login'] = null;
                $this->data['fields']['login'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('login', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['login']) && !array_key_exists('login', $this->fieldsModified)) {
            $this->fieldsModified['login'] = $this->data['fields']['login'];
        } elseif ($this->isFieldModifiedEqualTo('login', $value)) {
            unset($this->fieldsModified['login']);
        }

        $this->data['fields']['login'] = $value;

        return $this;
    }

    /**
     * Returns the "login" field.
     *
     * @return mixed The $name field.
     */
    public function getLogin()
    {
        if (!isset($this->data['fields']['login'])) {
            if ($this->isNew()) {
                $this->data['fields']['login'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('login', $this->data['fields'])) {
                $this->addFieldCache('login');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('login' => 1));
                if (isset($data['login'])) {
                    $this->data['fields']['login'] = (string) $data['login'];
                } else {
                    $this->data['fields']['login'] = null;
                }
            }
        }

        return $this->data['fields']['login'];
    }

    /**
     * Set the "hash" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function setHash($value)
    {
        if (!isset($this->data['fields']['hash'])) {
            if (!$this->isNew()) {
                $this->getHash();
                if ($this->isFieldEqualTo('hash', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['hash'] = null;
                $this->data['fields']['hash'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('hash', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['hash']) && !array_key_exists('hash', $this->fieldsModified)) {
            $this->fieldsModified['hash'] = $this->data['fields']['hash'];
        } elseif ($this->isFieldModifiedEqualTo('hash', $value)) {
            unset($this->fieldsModified['hash']);
        }

        $this->data['fields']['hash'] = $value;

        return $this;
    }

    /**
     * Returns the "hash" field.
     *
     * @return mixed The $name field.
     */
    public function getHash()
    {
        if (!isset($this->data['fields']['hash'])) {
            if ($this->isNew()) {
                $this->data['fields']['hash'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('hash', $this->data['fields'])) {
                $this->addFieldCache('hash');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('hash' => 1));
                if (isset($data['hash'])) {
                    $this->data['fields']['hash'] = (string) $data['hash'];
                } else {
                    $this->data['fields']['hash'] = null;
                }
            }
        }

        return $this->data['fields']['hash'];
    }

    /**
     * Set the "salt" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function setSalt($value)
    {
        if (!isset($this->data['fields']['salt'])) {
            if (!$this->isNew()) {
                $this->getSalt();
                if ($this->isFieldEqualTo('salt', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['salt'] = null;
                $this->data['fields']['salt'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('salt', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['salt']) && !array_key_exists('salt', $this->fieldsModified)) {
            $this->fieldsModified['salt'] = $this->data['fields']['salt'];
        } elseif ($this->isFieldModifiedEqualTo('salt', $value)) {
            unset($this->fieldsModified['salt']);
        }

        $this->data['fields']['salt'] = $value;

        return $this;
    }

    /**
     * Returns the "salt" field.
     *
     * @return mixed The $name field.
     */
    public function getSalt()
    {
        if (!isset($this->data['fields']['salt'])) {
            if ($this->isNew()) {
                $this->data['fields']['salt'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('salt', $this->data['fields'])) {
                $this->addFieldCache('salt');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('salt' => 1));
                if (isset($data['salt'])) {
                    $this->data['fields']['salt'] = (string) $data['salt'];
                } else {
                    $this->data['fields']['salt'] = null;
                }
            }
        }

        return $this->data['fields']['salt'];
    }

    /**
     * Set the "first_name" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function setFirst_name($value)
    {
        if (!isset($this->data['fields']['first_name'])) {
            if (!$this->isNew()) {
                $this->getFirst_name();
                if ($this->isFieldEqualTo('first_name', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['first_name'] = null;
                $this->data['fields']['first_name'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('first_name', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['first_name']) && !array_key_exists('first_name', $this->fieldsModified)) {
            $this->fieldsModified['first_name'] = $this->data['fields']['first_name'];
        } elseif ($this->isFieldModifiedEqualTo('first_name', $value)) {
            unset($this->fieldsModified['first_name']);
        }

        $this->data['fields']['first_name'] = $value;

        return $this;
    }

    /**
     * Returns the "first_name" field.
     *
     * @return mixed The $name field.
     */
    public function getFirst_name()
    {
        if (!isset($this->data['fields']['first_name'])) {
            if ($this->isNew()) {
                $this->data['fields']['first_name'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('first_name', $this->data['fields'])) {
                $this->addFieldCache('first_name');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('first_name' => 1));
                if (isset($data['first_name'])) {
                    $this->data['fields']['first_name'] = (string) $data['first_name'];
                } else {
                    $this->data['fields']['first_name'] = null;
                }
            }
        }

        return $this->data['fields']['first_name'];
    }

    /**
     * Set the "last_name" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function setLast_name($value)
    {
        if (!isset($this->data['fields']['last_name'])) {
            if (!$this->isNew()) {
                $this->getLast_name();
                if ($this->isFieldEqualTo('last_name', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['last_name'] = null;
                $this->data['fields']['last_name'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('last_name', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['last_name']) && !array_key_exists('last_name', $this->fieldsModified)) {
            $this->fieldsModified['last_name'] = $this->data['fields']['last_name'];
        } elseif ($this->isFieldModifiedEqualTo('last_name', $value)) {
            unset($this->fieldsModified['last_name']);
        }

        $this->data['fields']['last_name'] = $value;

        return $this;
    }

    /**
     * Returns the "last_name" field.
     *
     * @return mixed The $name field.
     */
    public function getLast_name()
    {
        if (!isset($this->data['fields']['last_name'])) {
            if ($this->isNew()) {
                $this->data['fields']['last_name'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('last_name', $this->data['fields'])) {
                $this->addFieldCache('last_name');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('last_name' => 1));
                if (isset($data['last_name'])) {
                    $this->data['fields']['last_name'] = (string) $data['last_name'];
                } else {
                    $this->data['fields']['last_name'] = null;
                }
            }
        }

        return $this->data['fields']['last_name'];
    }

    /**
     * Set the "email" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function setEmail($value)
    {
        if (!isset($this->data['fields']['email'])) {
            if (!$this->isNew()) {
                $this->getEmail();
                if ($this->isFieldEqualTo('email', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['email'] = null;
                $this->data['fields']['email'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('email', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['email']) && !array_key_exists('email', $this->fieldsModified)) {
            $this->fieldsModified['email'] = $this->data['fields']['email'];
        } elseif ($this->isFieldModifiedEqualTo('email', $value)) {
            unset($this->fieldsModified['email']);
        }

        $this->data['fields']['email'] = $value;

        return $this;
    }

    /**
     * Returns the "email" field.
     *
     * @return mixed The $name field.
     */
    public function getEmail()
    {
        if (!isset($this->data['fields']['email'])) {
            if ($this->isNew()) {
                $this->data['fields']['email'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('email', $this->data['fields'])) {
                $this->addFieldCache('email');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('email' => 1));
                if (isset($data['email'])) {
                    $this->data['fields']['email'] = (string) $data['email'];
                } else {
                    $this->data['fields']['email'] = null;
                }
            }
        }

        return $this->data['fields']['email'];
    }

    /**
     * Set the "addresses" field.
     *
     * @param mixed $value The value.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function setAddresses($value)
    {
        if (!isset($this->data['fields']['addresses'])) {
            if (!$this->isNew()) {
                $this->getAddresses();
                if ($this->isFieldEqualTo('addresses', $value)) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['addresses'] = null;
                $this->data['fields']['addresses'] = $value;
                return $this;
            }
        } elseif ($this->isFieldEqualTo('addresses', $value)) {
            return $this;
        }

        if (!isset($this->fieldsModified['addresses']) && !array_key_exists('addresses', $this->fieldsModified)) {
            $this->fieldsModified['addresses'] = $this->data['fields']['addresses'];
        } elseif ($this->isFieldModifiedEqualTo('addresses', $value)) {
            unset($this->fieldsModified['addresses']);
        }

        $this->data['fields']['addresses'] = $value;

        return $this;
    }

    /**
     * Returns the "addresses" field.
     *
     * @return mixed The $name field.
     */
    public function getAddresses()
    {
        if (!isset($this->data['fields']['addresses'])) {
            if ($this->isNew()) {
                $this->data['fields']['addresses'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('addresses', $this->data['fields'])) {
                $this->addFieldCache('addresses');
                $data = $this->getRepository()->getCollection()->findOne(array('_id' => $this->getId()), array('addresses' => 1));
                if (isset($data['addresses'])) {
                    $this->data['fields']['addresses'] = (string) $data['addresses'];
                } else {
                    $this->data['fields']['addresses'] = null;
                }
            }
        }

        return $this->data['fields']['addresses'];
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
        if ('login' == $name) {
            return $this->setLogin($value);
        }
        if ('hash' == $name) {
            return $this->setHash($value);
        }
        if ('salt' == $name) {
            return $this->setSalt($value);
        }
        if ('first_name' == $name) {
            return $this->setFirst_name($value);
        }
        if ('last_name' == $name) {
            return $this->setLast_name($value);
        }
        if ('email' == $name) {
            return $this->setEmail($value);
        }
        if ('addresses' == $name) {
            return $this->setAddresses($value);
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
        if ('login' == $name) {
            return $this->getLogin();
        }
        if ('hash' == $name) {
            return $this->getHash();
        }
        if ('salt' == $name) {
            return $this->getSalt();
        }
        if ('first_name' == $name) {
            return $this->getFirst_name();
        }
        if ('last_name' == $name) {
            return $this->getLast_name();
        }
        if ('email' == $name) {
            return $this->getEmail();
        }
        if ('addresses' == $name) {
            return $this->getAddresses();
        }

        throw new \InvalidArgumentException(sprintf('The document data "%s" is not valid.', $name));
    }

    /**
     * Imports data from an array.
     *
     * @param array $array An array.
     *
     * @return \Model\PHPOrchestraCMSBundle\User The document (fluent interface).
     */
    public function fromArray(array $array)
    {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        }
        if (isset($array['login'])) {
            $this->setLogin($array['login']);
        }
        if (isset($array['hash'])) {
            $this->setHash($array['hash']);
        }
        if (isset($array['salt'])) {
            $this->setSalt($array['salt']);
        }
        if (isset($array['first_name'])) {
            $this->setFirst_name($array['first_name']);
        }
        if (isset($array['last_name'])) {
            $this->setLast_name($array['last_name']);
        }
        if (isset($array['email'])) {
            $this->setEmail($array['email']);
        }
        if (isset($array['addresses'])) {
            $this->setAddresses($array['addresses']);
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

        $array['login'] = $this->getLogin();
        $array['hash'] = $this->getHash();
        $array['salt'] = $this->getSalt();
        $array['first_name'] = $this->getFirst_name();
        $array['last_name'] = $this->getLast_name();
        $array['email'] = $this->getEmail();
        $array['addresses'] = $this->getAddresses();

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
                if (isset($this->data['fields']['login'])) {
                    $query['login'] = (string) $this->data['fields']['login'];
                }
                if (isset($this->data['fields']['hash'])) {
                    $query['hash'] = (string) $this->data['fields']['hash'];
                }
                if (isset($this->data['fields']['salt'])) {
                    $query['salt'] = (string) $this->data['fields']['salt'];
                }
                if (isset($this->data['fields']['first_name'])) {
                    $query['first_name'] = (string) $this->data['fields']['first_name'];
                }
                if (isset($this->data['fields']['last_name'])) {
                    $query['last_name'] = (string) $this->data['fields']['last_name'];
                }
                if (isset($this->data['fields']['email'])) {
                    $query['email'] = (string) $this->data['fields']['email'];
                }
                if (isset($this->data['fields']['addresses'])) {
                    $query['addresses'] = (string) $this->data['fields']['addresses'];
                }
            } else {
                if (isset($this->data['fields']['login']) || array_key_exists('login', $this->data['fields'])) {
                    $value = $this->data['fields']['login'];
                    $originalValue = $this->getOriginalFieldValue('login');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['login'] = (string) $this->data['fields']['login'];
                        } else {
                            $query['$unset']['login'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['hash']) || array_key_exists('hash', $this->data['fields'])) {
                    $value = $this->data['fields']['hash'];
                    $originalValue = $this->getOriginalFieldValue('hash');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['hash'] = (string) $this->data['fields']['hash'];
                        } else {
                            $query['$unset']['hash'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['salt']) || array_key_exists('salt', $this->data['fields'])) {
                    $value = $this->data['fields']['salt'];
                    $originalValue = $this->getOriginalFieldValue('salt');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['salt'] = (string) $this->data['fields']['salt'];
                        } else {
                            $query['$unset']['salt'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['first_name']) || array_key_exists('first_name', $this->data['fields'])) {
                    $value = $this->data['fields']['first_name'];
                    $originalValue = $this->getOriginalFieldValue('first_name');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['first_name'] = (string) $this->data['fields']['first_name'];
                        } else {
                            $query['$unset']['first_name'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['last_name']) || array_key_exists('last_name', $this->data['fields'])) {
                    $value = $this->data['fields']['last_name'];
                    $originalValue = $this->getOriginalFieldValue('last_name');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['last_name'] = (string) $this->data['fields']['last_name'];
                        } else {
                            $query['$unset']['last_name'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['email']) || array_key_exists('email', $this->data['fields'])) {
                    $value = $this->data['fields']['email'];
                    $originalValue = $this->getOriginalFieldValue('email');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['email'] = (string) $this->data['fields']['email'];
                        } else {
                            $query['$unset']['email'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['addresses']) || array_key_exists('addresses', $this->data['fields'])) {
                    $value = $this->data['fields']['addresses'];
                    $originalValue = $this->getOriginalFieldValue('addresses');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['addresses'] = (string) $this->data['fields']['addresses'];
                        } else {
                            $query['$unset']['addresses'] = 1;
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