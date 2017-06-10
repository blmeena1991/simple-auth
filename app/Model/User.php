<?php
class User extends AppModel {
    /* validate data enetered by user */
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('custom', '/.+/'),
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Please enter a username.'
            ),
            'alpha' => array(
                'rule' => array('alphaNumeric'),
                'message' => 'The username must be alphanumeric.'
            ),
            'unique_username' => array(
                'rule' => array('isUnique', 'username'),
                'message' => 'This username is already in use.'
            ),
            'username_min' => array(
                'rule' => array('minLength', '3'),
                'message' => 'The username must have at least 3 characters.'
            )
        ),
        'password' => array(
            'too_short' => array(
                'rule' => array('minLength', '6'),
                'message' => 'The password must have at least 6 characters.'
            ),
        )
    );

    public function beforeSave($options = array()) {

        /* password hashing */
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
}
