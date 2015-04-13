<?php
class IamManish_PaymentFilter_Model_Observer {
	public function paymentMethodIsActive(Varien_Event_Observer $observer) {
		// Mage::dispatchEvent('admin_session_user_login_success', array('user'=>$user));
		// $user = $observer->getEvent()->getUser();
		// $user->doSomething();
		$event = $observer->getEvent ();
		$method = $event->getMethodInstance ();
		$result = $event->getResult ();
		$currencyCode = Mage::app ()->getStore ()->getCurrentCurrencyCode ();
		$someConditions = true; // this can be any condition based on your requirements
		
		if ($someConditions) {
			if ($method->getCode () == 'paypal_standard') {
				$result->isAvailable = true;
			} else {
				$result->isAvailable = false;
			}
		}
	}
}