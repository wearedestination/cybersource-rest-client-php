<?php
/**
 * Ptsv2creditsProcessingInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv2creditsProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2creditsProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2credits_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commerceIndicator' => 'string',
        'processorId' => 'string',
        'paymentSolution' => 'string',
        'reconciliationId' => 'string',
        'linkId' => 'string',
        'reportGroup' => 'string',
        'visaCheckoutId' => 'string',
        'purchaseLevel' => 'string',
        'industryDataType' => 'string',
        'walletType' => 'string',
        'nationalNetDomesticData' => 'string',
        'networkRoutingOrder' => 'string',
        'recurringOptions' => '\CyberSource\Model\Ptsv2paymentsidrefundsProcessingInformationRecurringOptions',
        'bankTransferOptions' => '\CyberSource\Model\Ptsv2creditsProcessingInformationBankTransferOptions',
        'purchaseOptions' => '\CyberSource\Model\Ptsv2creditsProcessingInformationPurchaseOptions',
        'electronicBenefitsTransfer' => '\CyberSource\Model\Ptsv2creditsProcessingInformationElectronicBenefitsTransfer',
        'loanOptions' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationLoanOptions',
        'japanPaymentOptions' => '\CyberSource\Model\Ptsv2creditsProcessingInformationJapanPaymentOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commerceIndicator' => null,
        'processorId' => null,
        'paymentSolution' => null,
        'reconciliationId' => null,
        'linkId' => null,
        'reportGroup' => null,
        'visaCheckoutId' => null,
        'purchaseLevel' => null,
        'industryDataType' => null,
        'walletType' => null,
        'nationalNetDomesticData' => null,
        'networkRoutingOrder' => null,
        'recurringOptions' => null,
        'bankTransferOptions' => null,
        'purchaseOptions' => null,
        'electronicBenefitsTransfer' => null,
        'loanOptions' => null,
        'japanPaymentOptions' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'commerceIndicator' => 'commerceIndicator',
        'processorId' => 'processorId',
        'paymentSolution' => 'paymentSolution',
        'reconciliationId' => 'reconciliationId',
        'linkId' => 'linkId',
        'reportGroup' => 'reportGroup',
        'visaCheckoutId' => 'visaCheckoutId',
        'purchaseLevel' => 'purchaseLevel',
        'industryDataType' => 'industryDataType',
        'walletType' => 'walletType',
        'nationalNetDomesticData' => 'nationalNetDomesticData',
        'networkRoutingOrder' => 'networkRoutingOrder',
        'recurringOptions' => 'recurringOptions',
        'bankTransferOptions' => 'bankTransferOptions',
        'purchaseOptions' => 'purchaseOptions',
        'electronicBenefitsTransfer' => 'electronicBenefitsTransfer',
        'loanOptions' => 'loanOptions',
        'japanPaymentOptions' => 'japanPaymentOptions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'commerceIndicator' => 'setCommerceIndicator',
        'processorId' => 'setProcessorId',
        'paymentSolution' => 'setPaymentSolution',
        'reconciliationId' => 'setReconciliationId',
        'linkId' => 'setLinkId',
        'reportGroup' => 'setReportGroup',
        'visaCheckoutId' => 'setVisaCheckoutId',
        'purchaseLevel' => 'setPurchaseLevel',
        'industryDataType' => 'setIndustryDataType',
        'walletType' => 'setWalletType',
        'nationalNetDomesticData' => 'setNationalNetDomesticData',
        'networkRoutingOrder' => 'setNetworkRoutingOrder',
        'recurringOptions' => 'setRecurringOptions',
        'bankTransferOptions' => 'setBankTransferOptions',
        'purchaseOptions' => 'setPurchaseOptions',
        'electronicBenefitsTransfer' => 'setElectronicBenefitsTransfer',
        'loanOptions' => 'setLoanOptions',
        'japanPaymentOptions' => 'setJapanPaymentOptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'commerceIndicator' => 'getCommerceIndicator',
        'processorId' => 'getProcessorId',
        'paymentSolution' => 'getPaymentSolution',
        'reconciliationId' => 'getReconciliationId',
        'linkId' => 'getLinkId',
        'reportGroup' => 'getReportGroup',
        'visaCheckoutId' => 'getVisaCheckoutId',
        'purchaseLevel' => 'getPurchaseLevel',
        'industryDataType' => 'getIndustryDataType',
        'walletType' => 'getWalletType',
        'nationalNetDomesticData' => 'getNationalNetDomesticData',
        'networkRoutingOrder' => 'getNetworkRoutingOrder',
        'recurringOptions' => 'getRecurringOptions',
        'bankTransferOptions' => 'getBankTransferOptions',
        'purchaseOptions' => 'getPurchaseOptions',
        'electronicBenefitsTransfer' => 'getElectronicBenefitsTransfer',
        'loanOptions' => 'getLoanOptions',
        'japanPaymentOptions' => 'getJapanPaymentOptions'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['commerceIndicator'] = isset($data['commerceIndicator']) ? $data['commerceIndicator'] : null;
        $this->container['processorId'] = isset($data['processorId']) ? $data['processorId'] : null;
        $this->container['paymentSolution'] = isset($data['paymentSolution']) ? $data['paymentSolution'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['linkId'] = isset($data['linkId']) ? $data['linkId'] : null;
        $this->container['reportGroup'] = isset($data['reportGroup']) ? $data['reportGroup'] : null;
        $this->container['visaCheckoutId'] = isset($data['visaCheckoutId']) ? $data['visaCheckoutId'] : null;
        $this->container['purchaseLevel'] = isset($data['purchaseLevel']) ? $data['purchaseLevel'] : null;
        $this->container['industryDataType'] = isset($data['industryDataType']) ? $data['industryDataType'] : null;
        $this->container['walletType'] = isset($data['walletType']) ? $data['walletType'] : null;
        $this->container['nationalNetDomesticData'] = isset($data['nationalNetDomesticData']) ? $data['nationalNetDomesticData'] : null;
        $this->container['networkRoutingOrder'] = isset($data['networkRoutingOrder']) ? $data['networkRoutingOrder'] : null;
        $this->container['recurringOptions'] = isset($data['recurringOptions']) ? $data['recurringOptions'] : null;
        $this->container['bankTransferOptions'] = isset($data['bankTransferOptions']) ? $data['bankTransferOptions'] : null;
        $this->container['purchaseOptions'] = isset($data['purchaseOptions']) ? $data['purchaseOptions'] : null;
        $this->container['electronicBenefitsTransfer'] = isset($data['electronicBenefitsTransfer']) ? $data['electronicBenefitsTransfer'] : null;
        $this->container['loanOptions'] = isset($data['loanOptions']) ? $data['loanOptions'] : null;
        $this->container['japanPaymentOptions'] = isset($data['japanPaymentOptions']) ? $data['japanPaymentOptions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets commerceIndicator
     * @return string
     */
    public function getCommerceIndicator()
    {
        return $this->container['commerceIndicator'];
    }

    /**
     * Sets commerceIndicator
     * @param string $commerceIndicator Type of transaction. Some payment card companies use this information when determining discount rates.  #### Used by **Authorization** Required payer authentication transactions; otherwise, optional. **Credit** Required for standalone credits on Chase Paymentech solutions; otherwise, optional. Only `internet`, `moto`, `install`, `recurring`, and `recurring_internet` are valid values.  #### Ingenico ePayments When you omit this field for Ingenico ePayments, the processor uses the default transaction type they have on file for you instead of the default value (listed in Appendix I, \"Commerce Indicators,\" on page 441.)  #### Payer Authentication Transactions For the possible values and requirements, see \"Payer Authentication,\" page 195.  #### Other Types of Transactions See Appendix I, \"Commerce Indicators,\" on page 441.  #### Card Present You must set this field to `retail`. This field is required for a card-present transaction. Note that this should ONLY be used when the cardholder and card are present at the time of the transaction. For all keyed transactions originated from a POS terminal where the cardholder and card are not present, commerceIndicator should be submitted as “moto\"
     * @return $this
     */
    public function setCommerceIndicator($commerceIndicator)
    {

        $this->container['commerceIndicator'] = $commerceIndicator;

        return $this;
    }

    /**
     * Gets processorId
     * @return string
     */
    public function getProcessorId()
    {
        return $this->container['processorId'];
    }

    /**
     * Sets processorId
     * @param string $processorId Value that identifies the processor/acquirer to use for the transaction. This value is supported only for **CyberSource through VisaNet**.  Contact CyberSource Customer Support to get the value for this field.
     * @return $this
     */
    public function setProcessorId($processorId)
    {

        $this->container['processorId'] = $processorId;

        return $this;
    }

    /**
     * Gets paymentSolution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->container['paymentSolution'];
    }

    /**
     * Sets paymentSolution
     * @param string $paymentSolution Type of digital payment solution for the transaction. Possible Values:   - `visacheckout`: Visa Checkout. This value is required for Visa Checkout transactions. For details, see `payment_solution` field description in [Visa Checkout Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/VCO_SCMP_API/html/)  - `001`: Apple Pay.  - `004`: Cybersource In-App Solution.  - `005`: Masterpass. This value is required for Masterpass transactions on OmniPay Direct. For details, see \"Masterpass\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  - `006`: Android Pay.  - `007`: Chase Pay.  - `008`: Samsung Pay.  - `012`: Google Pay.  - `014`: Mastercard credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.  - `015`: Visa credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.
     * @return $this
     */
    public function setPaymentSolution($paymentSolution)
    {

        $this->container['paymentSolution'] = $paymentSolution;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request. * For Payouts: max length for FDCCompass is String (22).
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {

        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets linkId
     * @return string
     */
    public function getLinkId()
    {
        return $this->container['linkId'];
    }

    /**
     * Sets linkId
     * @param string $linkId Value that links the current authorization request to the original authorization request. Set this value to the ID that was returned in the reply message from the original authorization request.  This value is used for:  - Partial authorizations - Split shipments  For details, see `link_to_request` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setLinkId($linkId)
    {

        $this->container['linkId'] = $linkId;

        return $this;
    }

    /**
     * Gets reportGroup
     * @return string
     */
    public function getReportGroup()
    {
        return $this->container['reportGroup'];
    }

    /**
     * Sets reportGroup
     * @param string $reportGroup Attribute that lets you define custom grouping for your processor reports. This field is supported only for **Worldpay VAP**.  For details, see `report_group` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setReportGroup($reportGroup)
    {

        $this->container['reportGroup'] = $reportGroup;

        return $this;
    }

    /**
     * Gets visaCheckoutId
     * @return string
     */
    public function getVisaCheckoutId()
    {
        return $this->container['visaCheckoutId'];
    }

    /**
     * Sets visaCheckoutId
     * @param string $visaCheckoutId Identifier for the **Visa Checkout** order. Visa Checkout provides a unique order ID for every transaction in the Visa Checkout **callID** field.
     * @return $this
     */
    public function setVisaCheckoutId($visaCheckoutId)
    {

        $this->container['visaCheckoutId'] = $visaCheckoutId;

        return $this;
    }

    /**
     * Gets purchaseLevel
     * @return string
     */
    public function getPurchaseLevel()
    {
        return $this->container['purchaseLevel'];
    }

    /**
     * Sets purchaseLevel
     * @param string $purchaseLevel Set this field to 3 to indicate that the request includes Level III data.
     * @return $this
     */
    public function setPurchaseLevel($purchaseLevel)
    {

        $this->container['purchaseLevel'] = $purchaseLevel;

        return $this;
    }

    /**
     * Gets industryDataType
     * @return string
     */
    public function getIndustryDataType()
    {
        return $this->container['industryDataType'];
    }

    /**
     * Sets industryDataType
     * @param string $industryDataType Indicates that the transaction includes industry-specific data.  Possible Values: - `airline` - `restaurant` - `lodging` - `auto_rental` - `transit` - `healthcare_medical` - `healthcare_transit` - `transit`  #### Card Present, Airlines and Auto Rental You must set this field to `airline` in order for airline data to be sent to the processor. For example, if this field is not set to `airline` or is not included in the request, no airline data is sent to the processor.  You must set this field to `restaurant` in order for restaurant data to be sent to the processor. When this field is not set to `restaurant` or is not included in the request, no restaurant data is sent to the processor.  You must set this field to `auto_rental` in order for auto rental data to be sent to the processor. For example, if this field is not set to `auto_rental` or is not included in the request, no auto rental data is sent to the processor.  Restaurant data is supported only on CyberSource through VisaNet.
     * @return $this
     */
    public function setIndustryDataType($industryDataType)
    {

        $this->container['industryDataType'] = $industryDataType;

        return $this;
    }

    /**
     * Gets walletType
     * @return string
     */
    public function getWalletType()
    {
        return $this->container['walletType'];
    }

    /**
     * Sets walletType
     * @param string $walletType This field carries the wallet type in authorization requests and credit requests. Possible value are: - `101`: Masterpass remote payment. The customer created the wallet by manually interacting with a customer-controlled device such as a computer, tablet, or phone. This value is supported only for Masterpass transactions on Chase Paymentech Solutions and CyberSource through VisaNet. - `102`: Masterpass remote near field communication (NFC) payment. The customer created the wallet by tapping a PayPass card or customer-controlled device at a contactless card reader. This value is supported only for card-present Masterpass transactions on CyberSource through VisaNet. - `103`: Masterpass Apple Pay payment. The payment was made with a combination of Masterpass and Apple Pay. This value is supported only for Masterpass Apple Pay transactions on CyberSource through VisaNet. - `216`: Masterpass Google Pay payment. The payment was made with a combination of Masterpass and Google Pay. This value is supported only for Masterpass Google Pay transactions on CyberSource through VisaNet. - `217`: Masterpass Samsung Pay payment. The payment was made with a combination of Masterpass and Samsung Pay. This value is supported only for Masterpass Samsung Pay transactions on CyberSource through VisaNet. - `SDW`: Staged digital wallet. An issuer or operator created the wallet. This value is supported only for Masterpass transactions on Chase Paymentech Solutions. - `VCIND`: Visa Checkout payment. This value is supported only on CyberSource through VisaNet, FDC Compass, FDC Nashville Global, FDI Australia, and TSYS Acquiring Solutions. See Getting Started with Visa Checkout. For Visa Checkout transactions, the way CyberSource processes the value for this field depends on the processor. See the Visa Checkout section below. For all other values, this field is a passthrough; therefore, CyberSource does not verify the value or modify it in any way before sending it to the processor. Masterpass (101, 102, 103, 216, and 217): The Masterpass platform generates the wallet type value and passes it to you along with the customer’s checkout information.  Visa Checkout: This field is optional for Visa Checkout authorizations on FDI Australia. For all other processors, this field is required for Visa Checkout authorizations. For Visa Checkout transactions on the following processors, CyberSource sends the value that the processor expects for this field:FDC Compass,FDC Nashville Global,FDI Australia,TSYS Acquiring Solutions For all other processors, this field is a passthrough; therefore, CyberSource does not verify the value or modify it in any way before sending it to the processor. For incremental authorizations, this field is supported only for Mastercard and the supported values are 101 and 102. Payment card companies can introduce new values without notice. Your order management system should be able to process new values without problems.  CyberSource through VisaNet When the value for this field is 101, 102, 103, 216, or 217, it corresponds to the following data in the TC 33 capture file5: Record: CP01 TCR6, Position: 88-90,  Field: Mastercard Wallet Identifier. When the value for this field is VCIND, it corresponds to the following data in the TC 33 capture file5: Record: CP01 TCR8, Position: 72-76, Field: Agent Unique ID.
     * @return $this
     */
    public function setWalletType($walletType)
    {

        $this->container['walletType'] = $walletType;

        return $this;
    }

    /**
     * Gets nationalNetDomesticData
     * @return string
     */
    public function getNationalNetDomesticData()
    {
        return $this->container['nationalNetDomesticData'];
    }

    /**
     * Sets nationalNetDomesticData
     * @param string $nationalNetDomesticData Supplementary domestic transaction information provided by the acquirer for National Net Settlement Service (NNSS) transactions. NNSS is a settlement service that Visa provides. For transactions on CyberSource through VisaNet in countries that subscribe to NNSS: VisaNet clears transactions; VisaNet transfers funds to the acquirer after deducting processing fees and interchange fees. VisaNet settles transactions in the local pricing currency through a local financial institution. This field is supported only on CyberSource through VisaNet for domestic data in Colombia
     * @return $this
     */
    public function setNationalNetDomesticData($nationalNetDomesticData)
    {

        $this->container['nationalNetDomesticData'] = $nationalNetDomesticData;

        return $this;
    }

    /**
     * Gets networkRoutingOrder
     * @return string
     */
    public function getNetworkRoutingOrder()
    {
        return $this->container['networkRoutingOrder'];
    }

    /**
     * Sets networkRoutingOrder
     * @param string $networkRoutingOrder On PIN Debit Gateways: This U.S.-only field is optionally used by  participants (merchants and acquirers) to specify the network access priority. VisaNet checks to determine if there are issuer routing preferences for any of the networks specified by the sharing group code. If an issuer preference exists for one of the specified debit networks, VisaNet makes a routing selection based on the issuer’s preference. If an issuer preference exists for more than one of the specified debit networks, or if no issuer preference exists, VisaNet makes a selection based on the acquirer’s routing priorities.  #### PIN debit Priority order of the networks through which he transaction will be routed. Set this value to a series of one-character network codes in your preferred order. This is a list of the network codes:  | Network | Code | | --- | --- | | Accel | E | | AFFN | U | | Alaska Option | 3 | | CU24 | C | | Interlink | G | | Maestro | 8 | | NETS | P | | NYCE | F | | Pulse | H | | Shazam | 7 | | Star | M | | Visa | V |  For example, if the Star network is your first preference and Pulse is your second preference, set this field to a value of `MH`.  When you do not include this value in your PIN debit request, the list of network codes from your account is used. **Note** This field is supported only for businesses located in the U.S.  Optional field for PIN debit credit or PIN debit purchase.
     * @return $this
     */
    public function setNetworkRoutingOrder($networkRoutingOrder)
    {

        $this->container['networkRoutingOrder'] = $networkRoutingOrder;

        return $this;
    }

    /**
     * Gets recurringOptions
     * @return \CyberSource\Model\Ptsv2paymentsidrefundsProcessingInformationRecurringOptions
     */
    public function getRecurringOptions()
    {
        return $this->container['recurringOptions'];
    }

    /**
     * Sets recurringOptions
     * @param \CyberSource\Model\Ptsv2paymentsidrefundsProcessingInformationRecurringOptions $recurringOptions
     * @return $this
     */
    public function setRecurringOptions($recurringOptions)
    {
        $this->container['recurringOptions'] = $recurringOptions;

        return $this;
    }

    /**
     * Gets bankTransferOptions
     * @return \CyberSource\Model\Ptsv2creditsProcessingInformationBankTransferOptions
     */
    public function getBankTransferOptions()
    {
        return $this->container['bankTransferOptions'];
    }

    /**
     * Sets bankTransferOptions
     * @param \CyberSource\Model\Ptsv2creditsProcessingInformationBankTransferOptions $bankTransferOptions
     * @return $this
     */
    public function setBankTransferOptions($bankTransferOptions)
    {
        $this->container['bankTransferOptions'] = $bankTransferOptions;

        return $this;
    }

    /**
     * Gets purchaseOptions
     * @return \CyberSource\Model\Ptsv2creditsProcessingInformationPurchaseOptions
     */
    public function getPurchaseOptions()
    {
        return $this->container['purchaseOptions'];
    }

    /**
     * Sets purchaseOptions
     * @param \CyberSource\Model\Ptsv2creditsProcessingInformationPurchaseOptions $purchaseOptions
     * @return $this
     */
    public function setPurchaseOptions($purchaseOptions)
    {
        $this->container['purchaseOptions'] = $purchaseOptions;

        return $this;
    }

    /**
     * Gets electronicBenefitsTransfer
     * @return \CyberSource\Model\Ptsv2creditsProcessingInformationElectronicBenefitsTransfer
     */
    public function getElectronicBenefitsTransfer()
    {
        return $this->container['electronicBenefitsTransfer'];
    }

    /**
     * Sets electronicBenefitsTransfer
     * @param \CyberSource\Model\Ptsv2creditsProcessingInformationElectronicBenefitsTransfer $electronicBenefitsTransfer
     * @return $this
     */
    public function setElectronicBenefitsTransfer($electronicBenefitsTransfer)
    {
        $this->container['electronicBenefitsTransfer'] = $electronicBenefitsTransfer;

        return $this;
    }

    /**
     * Gets loanOptions
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationLoanOptions
     */
    public function getLoanOptions()
    {
        return $this->container['loanOptions'];
    }

    /**
     * Sets loanOptions
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationLoanOptions $loanOptions
     * @return $this
     */
    public function setLoanOptions($loanOptions)
    {
        $this->container['loanOptions'] = $loanOptions;

        return $this;
    }

    /**
     * Gets japanPaymentOptions
     * @return \CyberSource\Model\Ptsv2creditsProcessingInformationJapanPaymentOptions
     */
    public function getJapanPaymentOptions()
    {
        return $this->container['japanPaymentOptions'];
    }

    /**
     * Sets japanPaymentOptions
     * @param \CyberSource\Model\Ptsv2creditsProcessingInformationJapanPaymentOptions $japanPaymentOptions
     * @return $this
     */
    public function setJapanPaymentOptions($japanPaymentOptions)
    {
        $this->container['japanPaymentOptions'] = $japanPaymentOptions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


