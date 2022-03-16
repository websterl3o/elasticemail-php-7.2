<?php
/**
 * AccessLevel
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ElasticEmail\Model;
use \ElasticEmail\ObjectSerializer;

/**
 * AccessLevel Class Doc Comment
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccessLevel
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';

    const VIEW_ACCOUNT = 'ViewAccount';

    const VIEW_CONTACTS = 'ViewContacts';

    const VIEW_FORMS = 'ViewForms';

    const VIEW_TEMPLATES = 'ViewTemplates';

    const VIEW_CAMPAIGNS = 'ViewCampaigns';

    const VIEW_CHANNELS = 'ViewChannels';

    const VIEW_AUTOMATIONS = 'ViewAutomations';

    const VIEW_SURVEYS = 'ViewSurveys';

    const VIEW_SETTINGS = 'ViewSettings';

    const VIEW_BILLING = 'ViewBilling';

    const VIEW_SUB_ACCOUNTS = 'ViewSubAccounts';

    const VIEW_USERS = 'ViewUsers';

    const VIEW_FILES = 'ViewFiles';

    const VIEW_REPORTS = 'ViewReports';

    const MODIFY_ACCOUNT = 'ModifyAccount';

    const MODIFY_CONTACTS = 'ModifyContacts';

    const MODIFY_FORMS = 'ModifyForms';

    const MODIFY_TEMPLATES = 'ModifyTemplates';

    const MODIFY_CAMPAIGNS = 'ModifyCampaigns';

    const MODIFY_CHANNELS = 'ModifyChannels';

    const MODIFY_AUTOMATIONS = 'ModifyAutomations';

    const MODIFY_SURVEYS = 'ModifySurveys';

    const MODIFY_FILES = 'ModifyFiles';

    const EXPORT = 'Export';

    const SEND_SMTP = 'SendSmtp';

    const SEND_SMS = 'SendSMS';

    const MODIFY_SETTINGS = 'ModifySettings';

    const MODIFY_BILLING = 'ModifyBilling';

    const MODIFY_PROFILE = 'ModifyProfile';

    const MODIFY_SUB_ACCOUNTS = 'ModifySubAccounts';

    const MODIFY_USERS = 'ModifyUsers';

    const SECURITY = 'Security';

    const MODIFY_LANGUAGE = 'ModifyLanguage';

    const VIEW_SUPPORT = 'ViewSupport';

    const SEND_HTTP = 'SendHttp';

    const MODIFY2_FA = 'Modify2FA';

    const MODIFY_SUPPORT = 'ModifySupport';

    const VIEW_CUSTOM_FIELDS = 'ViewCustomFields';

    const MODIFY_CUSTOM_FIELDS = 'ModifyCustomFields';

    const MODIFY_WEB_NOTIFICATIONS = 'ModifyWebNotifications';

    const EXTENDED_LOGS = 'ExtendedLogs';

    const VERIFY_EMAILS = 'VerifyEmails';

    const VIEW_EMAIL_VERIFICATIONS = 'ViewEmailVerifications';

    const VIEW_MARKETING = 'ViewMarketing';

    const VIEW_EMAIL_API = 'ViewEmailApi';

    const VIEW_INBOUND = 'ViewInbound';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::VIEW_ACCOUNT,
            self::VIEW_CONTACTS,
            self::VIEW_FORMS,
            self::VIEW_TEMPLATES,
            self::VIEW_CAMPAIGNS,
            self::VIEW_CHANNELS,
            self::VIEW_AUTOMATIONS,
            self::VIEW_SURVEYS,
            self::VIEW_SETTINGS,
            self::VIEW_BILLING,
            self::VIEW_SUB_ACCOUNTS,
            self::VIEW_USERS,
            self::VIEW_FILES,
            self::VIEW_REPORTS,
            self::MODIFY_ACCOUNT,
            self::MODIFY_CONTACTS,
            self::MODIFY_FORMS,
            self::MODIFY_TEMPLATES,
            self::MODIFY_CAMPAIGNS,
            self::MODIFY_CHANNELS,
            self::MODIFY_AUTOMATIONS,
            self::MODIFY_SURVEYS,
            self::MODIFY_FILES,
            self::EXPORT,
            self::SEND_SMTP,
            self::SEND_SMS,
            self::MODIFY_SETTINGS,
            self::MODIFY_BILLING,
            self::MODIFY_PROFILE,
            self::MODIFY_SUB_ACCOUNTS,
            self::MODIFY_USERS,
            self::SECURITY,
            self::MODIFY_LANGUAGE,
            self::VIEW_SUPPORT,
            self::SEND_HTTP,
            self::MODIFY2_FA,
            self::MODIFY_SUPPORT,
            self::VIEW_CUSTOM_FIELDS,
            self::MODIFY_CUSTOM_FIELDS,
            self::MODIFY_WEB_NOTIFICATIONS,
            self::EXTENDED_LOGS,
            self::VERIFY_EMAILS,
            self::VIEW_EMAIL_VERIFICATIONS,
            self::VIEW_MARKETING,
            self::VIEW_EMAIL_API,
            self::VIEW_INBOUND
        ];
    }
}


