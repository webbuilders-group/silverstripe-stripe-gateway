<?php
class StripeGatewayProcessor extends PaymentProcessor_MerchantHosted
{
    /**
     * Get the processor's form fields. Custom controllers use this function to add the form fields specific to this gateway.
     * @return {FieldList}
     */
    public function getFormFields()
    {
        $fields=parent::getFormFields();
        
        
        $fields->insertAfter(new TextField('BillingAddress', _t('StripeGatewayProcessor.ADDRESS', '_Address')), 'LastName');
        $fields->insertAfter(new TextField('BillingAddress2', ''), 'BillingAddress');
        $fields->insertAfter(new TextField('BillingCity', _t('StripeGatewayProcessor.CITY', '_City')), 'BillingAddress2');
        $fields->insertAfter(new TextField('BillingState', _t('StripeGatewayProcessor.STATE_PROVINCE', '_State/Province')), 'BillingCity');
        $fields->insertAfter(new TextField('BillingZIPCode', _t('StripeGatewayProcessor.ZIP_POSTAL_CODE', '_ZIP/Postal Code')), 'BillingState');
        $fields->insertAfter(new CountryDropdownField('BillingCountry', _t('StripeGatewayProcessor.COUNTRY', '_Country')), 'BillingZIPCode');
        
        
        return $fields;
    }
    
    /**
     * Get the form requirements
     * @return {RequiredFields}
     */
    public function getFormRequirements()
    {
        $required=parent::getFormRequirements();
        
        
        $required->appendRequiredFields(new RequiredFields(
                                                            'BillingAddress',
                                                            'BillingCity',
                                                            'BillingState',
                                                            'BillingZIPCode',
                                                            'BillingCountry'
                                                        ));
        
        return $required;
    }
}
