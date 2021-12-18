<?php

/* ORMENTITYANNOTATION:Yngc0der\OAuth2Server\Tables\TokensTable */
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_Tokens
	 * @see \Yngc0der\OAuth2Server\Tables\TokensTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens setId(\string|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \boolean getIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens setIsRevoked(\boolean|\Bitrix\Main\DB\SqlExpression $isRevoked)
	 * @method bool hasIsRevoked()
	 * @method bool isIsRevokedFilled()
	 * @method bool isIsRevokedChanged()
	 * @method \boolean remindActualIsRevoked()
	 * @method \boolean requireIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens resetIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens unsetIsRevoked()
	 * @method \boolean fillIsRevoked()
	 * @method \int getUserId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
	 * @method bool hasUserId()
	 * @method bool isUserIdFilled()
	 * @method bool isUserIdChanged()
	 * @method \int remindActualUserId()
	 * @method \int requireUserId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens resetUserId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens unsetUserId()
	 * @method \int fillUserId()
	 * @method \string getClientId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens setClientId(\string|\Bitrix\Main\DB\SqlExpression $clientId)
	 * @method bool hasClientId()
	 * @method bool isClientIdFilled()
	 * @method bool isClientIdChanged()
	 * @method \string remindActualClientId()
	 * @method \string requireClientId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens resetClientId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens unsetClientId()
	 * @method \string fillClientId()
	 * @method array getScopes()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens setScopes(array|\Bitrix\Main\DB\SqlExpression $scopes)
	 * @method bool hasScopes()
	 * @method bool isScopesFilled()
	 * @method bool isScopesChanged()
	 * @method array remindActualScopes()
	 * @method array requireScopes()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens resetScopes()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens unsetScopes()
	 * @method array fillScopes()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens set($fieldName, $value)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens reset($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Tokens wakeUp($data)
	 */
	class EO_Tokens {
		/* @var \Yngc0der\OAuth2Server\Tables\TokensTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\TokensTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_Tokens_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getIdList()
	 * @method \boolean[] getIsRevokedList()
	 * @method \boolean[] fillIsRevoked()
	 * @method \int[] getUserIdList()
	 * @method \int[] fillUserId()
	 * @method \string[] getClientIdList()
	 * @method \string[] fillClientId()
	 * @method array[] getScopesList()
	 * @method array[] fillScopes()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Yngc0der\OAuth2Server\Tables\EO_Tokens $object)
	 * @method bool has(\Yngc0der\OAuth2Server\Tables\EO_Tokens $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens getByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens[] getAll()
	 * @method bool remove(\Yngc0der\OAuth2Server\Tables\EO_Tokens $object)
	 * @method void removeByPrimary($primary)
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Tokens_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 */
	class EO_Tokens_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Yngc0der\OAuth2Server\Tables\TokensTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\TokensTable';
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * @method static EO_Tokens_Query query()
	 * @method static EO_Tokens_Result getByPrimary($primary, array $parameters = array())
	 * @method static EO_Tokens_Result getById($id)
	 * @method static EO_Tokens_Result getList(array $parameters = array())
	 * @method static EO_Tokens_Entity getEntity()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Tokens createObject($setDefaultValues = true)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Tokens_Collection createCollection()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Tokens wakeUpObject($row)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Tokens_Collection wakeUpCollection($rows)
	 */
	class TokensTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Tokens_Result exec()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Tokens_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens_Collection fetchCollection()
	 */
	class EO_Tokens_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens createObject($setDefaultValues = true)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens_Collection createCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens wakeUpObject($row)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Tokens_Collection wakeUpCollection($rows)
	 */
	class EO_Tokens_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Yngc0der\OAuth2Server\Tables\ClientsTable */
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_Clients
	 * @see \Yngc0der\OAuth2Server\Tables\ClientsTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients setId(\string|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \string getName()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients setName(\string|\Bitrix\Main\DB\SqlExpression $name)
	 * @method bool hasName()
	 * @method bool isNameFilled()
	 * @method bool isNameChanged()
	 * @method \string remindActualName()
	 * @method \string requireName()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients resetName()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients unsetName()
	 * @method \string fillName()
	 * @method \boolean getIsConfidential()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients setIsConfidential(\boolean|\Bitrix\Main\DB\SqlExpression $isConfidential)
	 * @method bool hasIsConfidential()
	 * @method bool isIsConfidentialFilled()
	 * @method bool isIsConfidentialChanged()
	 * @method \boolean remindActualIsConfidential()
	 * @method \boolean requireIsConfidential()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients resetIsConfidential()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients unsetIsConfidential()
	 * @method \boolean fillIsConfidential()
	 * @method \string getRedirectUri()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients setRedirectUri(\string|\Bitrix\Main\DB\SqlExpression $redirectUri)
	 * @method bool hasRedirectUri()
	 * @method bool isRedirectUriFilled()
	 * @method bool isRedirectUriChanged()
	 * @method \string remindActualRedirectUri()
	 * @method \string requireRedirectUri()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients resetRedirectUri()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients unsetRedirectUri()
	 * @method \string fillRedirectUri()
	 * @method \string getSecret()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients setSecret(\string|\Bitrix\Main\DB\SqlExpression $secret)
	 * @method bool hasSecret()
	 * @method bool isSecretFilled()
	 * @method bool isSecretChanged()
	 * @method \string remindActualSecret()
	 * @method \string requireSecret()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients resetSecret()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients unsetSecret()
	 * @method \string fillSecret()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients set($fieldName, $value)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients reset($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Clients wakeUp($data)
	 */
	class EO_Clients {
		/* @var \Yngc0der\OAuth2Server\Tables\ClientsTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\ClientsTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_Clients_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getIdList()
	 * @method \string[] getNameList()
	 * @method \string[] fillName()
	 * @method \boolean[] getIsConfidentialList()
	 * @method \boolean[] fillIsConfidential()
	 * @method \string[] getRedirectUriList()
	 * @method \string[] fillRedirectUri()
	 * @method \string[] getSecretList()
	 * @method \string[] fillSecret()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Yngc0der\OAuth2Server\Tables\EO_Clients $object)
	 * @method bool has(\Yngc0der\OAuth2Server\Tables\EO_Clients $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients getByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients[] getAll()
	 * @method bool remove(\Yngc0der\OAuth2Server\Tables\EO_Clients $object)
	 * @method void removeByPrimary($primary)
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Clients_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 */
	class EO_Clients_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Yngc0der\OAuth2Server\Tables\ClientsTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\ClientsTable';
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * @method static EO_Clients_Query query()
	 * @method static EO_Clients_Result getByPrimary($primary, array $parameters = array())
	 * @method static EO_Clients_Result getById($id)
	 * @method static EO_Clients_Result getList(array $parameters = array())
	 * @method static EO_Clients_Entity getEntity()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Clients createObject($setDefaultValues = true)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Clients_Collection createCollection()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Clients wakeUpObject($row)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Clients_Collection wakeUpCollection($rows)
	 */
	class ClientsTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Clients_Result exec()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Clients_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients_Collection fetchCollection()
	 */
	class EO_Clients_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients createObject($setDefaultValues = true)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients_Collection createCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients wakeUpObject($row)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Clients_Collection wakeUpCollection($rows)
	 */
	class EO_Clients_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Yngc0der\OAuth2Server\Tables\RefreshTokensTable */
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_RefreshTokens
	 * @see \Yngc0der\OAuth2Server\Tables\RefreshTokensTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens setId(\string|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \Bitrix\Main\Type\DateTime getExpireDate()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens setExpireDate(\Bitrix\Main\Type\DateTime|\Bitrix\Main\DB\SqlExpression $expireDate)
	 * @method bool hasExpireDate()
	 * @method bool isExpireDateFilled()
	 * @method bool isExpireDateChanged()
	 * @method \Bitrix\Main\Type\DateTime remindActualExpireDate()
	 * @method \Bitrix\Main\Type\DateTime requireExpireDate()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens resetExpireDate()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens unsetExpireDate()
	 * @method \Bitrix\Main\Type\DateTime fillExpireDate()
	 * @method \string getAccessTokenId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens setAccessTokenId(\string|\Bitrix\Main\DB\SqlExpression $accessTokenId)
	 * @method bool hasAccessTokenId()
	 * @method bool isAccessTokenIdFilled()
	 * @method bool isAccessTokenIdChanged()
	 * @method \string remindActualAccessTokenId()
	 * @method \string requireAccessTokenId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens resetAccessTokenId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens unsetAccessTokenId()
	 * @method \string fillAccessTokenId()
	 * @method \boolean getIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens setIsRevoked(\boolean|\Bitrix\Main\DB\SqlExpression $isRevoked)
	 * @method bool hasIsRevoked()
	 * @method bool isIsRevokedFilled()
	 * @method bool isIsRevokedChanged()
	 * @method \boolean remindActualIsRevoked()
	 * @method \boolean requireIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens resetIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens unsetIsRevoked()
	 * @method \boolean fillIsRevoked()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens set($fieldName, $value)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens reset($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens wakeUp($data)
	 */
	class EO_RefreshTokens {
		/* @var \Yngc0der\OAuth2Server\Tables\RefreshTokensTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\RefreshTokensTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_RefreshTokens_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getIdList()
	 * @method \Bitrix\Main\Type\DateTime[] getExpireDateList()
	 * @method \Bitrix\Main\Type\DateTime[] fillExpireDate()
	 * @method \string[] getAccessTokenIdList()
	 * @method \string[] fillAccessTokenId()
	 * @method \boolean[] getIsRevokedList()
	 * @method \boolean[] fillIsRevoked()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Yngc0der\OAuth2Server\Tables\EO_RefreshTokens $object)
	 * @method bool has(\Yngc0der\OAuth2Server\Tables\EO_RefreshTokens $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens getByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens[] getAll()
	 * @method bool remove(\Yngc0der\OAuth2Server\Tables\EO_RefreshTokens $object)
	 * @method void removeByPrimary($primary)
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 */
	class EO_RefreshTokens_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Yngc0der\OAuth2Server\Tables\RefreshTokensTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\RefreshTokensTable';
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * @method static EO_RefreshTokens_Query query()
	 * @method static EO_RefreshTokens_Result getByPrimary($primary, array $parameters = array())
	 * @method static EO_RefreshTokens_Result getById($id)
	 * @method static EO_RefreshTokens_Result getList(array $parameters = array())
	 * @method static EO_RefreshTokens_Entity getEntity()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens createObject($setDefaultValues = true)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens_Collection createCollection()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens wakeUpObject($row)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens_Collection wakeUpCollection($rows)
	 */
	class RefreshTokensTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_RefreshTokens_Result exec()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_RefreshTokens_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens_Collection fetchCollection()
	 */
	class EO_RefreshTokens_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens createObject($setDefaultValues = true)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens_Collection createCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens wakeUpObject($row)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_RefreshTokens_Collection wakeUpCollection($rows)
	 */
	class EO_RefreshTokens_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Yngc0der\OAuth2Server\Tables\ScopesTable */
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_Scopes
	 * @see \Yngc0der\OAuth2Server\Tables\ScopesTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes setId(\string|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes set($fieldName, $value)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes reset($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Scopes wakeUp($data)
	 */
	class EO_Scopes {
		/* @var \Yngc0der\OAuth2Server\Tables\ScopesTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\ScopesTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_Scopes_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getIdList()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Yngc0der\OAuth2Server\Tables\EO_Scopes $object)
	 * @method bool has(\Yngc0der\OAuth2Server\Tables\EO_Scopes $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes getByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes[] getAll()
	 * @method bool remove(\Yngc0der\OAuth2Server\Tables\EO_Scopes $object)
	 * @method void removeByPrimary($primary)
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 */
	class EO_Scopes_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Yngc0der\OAuth2Server\Tables\ScopesTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\ScopesTable';
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * @method static EO_Scopes_Query query()
	 * @method static EO_Scopes_Result getByPrimary($primary, array $parameters = array())
	 * @method static EO_Scopes_Result getById($id)
	 * @method static EO_Scopes_Result getList(array $parameters = array())
	 * @method static EO_Scopes_Entity getEntity()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Scopes createObject($setDefaultValues = true)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection createCollection()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Scopes wakeUpObject($row)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection wakeUpCollection($rows)
	 */
	class ScopesTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_Scopes_Result exec()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_Scopes_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection fetchCollection()
	 */
	class EO_Scopes_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes createObject($setDefaultValues = true)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection createCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes wakeUpObject($row)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection wakeUpCollection($rows)
	 */
	class EO_Scopes_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Yngc0der\OAuth2Server\Tables\AuthCodesScopesTable */
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_AuthCodesScopes
	 * @see \Yngc0der\OAuth2Server\Tables\AuthCodesScopesTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getAuthCodeId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes setAuthCodeId(\string|\Bitrix\Main\DB\SqlExpression $authCodeId)
	 * @method bool hasAuthCodeId()
	 * @method bool isAuthCodeIdFilled()
	 * @method bool isAuthCodeIdChanged()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes getAuthCode()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes remindActualAuthCode()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes requireAuthCode()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes setAuthCode(\Yngc0der\OAuth2Server\Tables\EO_AuthCodes $object)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes resetAuthCode()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes unsetAuthCode()
	 * @method bool hasAuthCode()
	 * @method bool isAuthCodeFilled()
	 * @method bool isAuthCodeChanged()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes fillAuthCode()
	 * @method \string getScopeId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes setScopeId(\string|\Bitrix\Main\DB\SqlExpression $scopeId)
	 * @method bool hasScopeId()
	 * @method bool isScopeIdFilled()
	 * @method bool isScopeIdChanged()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes getScope()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes remindActualScope()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes requireScope()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes setScope(\Yngc0der\OAuth2Server\Tables\EO_Scopes $object)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes resetScope()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes unsetScope()
	 * @method bool hasScope()
	 * @method bool isScopeFilled()
	 * @method bool isScopeChanged()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes fillScope()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes set($fieldName, $value)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes reset($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes wakeUp($data)
	 */
	class EO_AuthCodesScopes {
		/* @var \Yngc0der\OAuth2Server\Tables\AuthCodesScopesTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\AuthCodesScopesTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_AuthCodesScopes_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getAuthCodeIdList()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes[] getAuthCodeList()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection getAuthCodeCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection fillAuthCode()
	 * @method \string[] getScopeIdList()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes[] getScopeList()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection getScopeCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_Scopes_Collection fillScope()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes $object)
	 * @method bool has(\Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes getByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes[] getAll()
	 * @method bool remove(\Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes $object)
	 * @method void removeByPrimary($primary)
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 */
	class EO_AuthCodesScopes_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Yngc0der\OAuth2Server\Tables\AuthCodesScopesTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\AuthCodesScopesTable';
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * @method static EO_AuthCodesScopes_Query query()
	 * @method static EO_AuthCodesScopes_Result getByPrimary($primary, array $parameters = array())
	 * @method static EO_AuthCodesScopes_Result getById($id)
	 * @method static EO_AuthCodesScopes_Result getList(array $parameters = array())
	 * @method static EO_AuthCodesScopes_Entity getEntity()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes createObject($setDefaultValues = true)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection createCollection()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes wakeUpObject($row)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection wakeUpCollection($rows)
	 */
	class AuthCodesScopesTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_AuthCodesScopes_Result exec()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_AuthCodesScopes_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection fetchCollection()
	 */
	class EO_AuthCodesScopes_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes createObject($setDefaultValues = true)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection createCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes wakeUpObject($row)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodesScopes_Collection wakeUpCollection($rows)
	 */
	class EO_AuthCodesScopes_Entity extends \Bitrix\Main\ORM\Entity {}
}
/* ORMENTITYANNOTATION:Yngc0der\OAuth2Server\Tables\AuthCodesTable */
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_AuthCodes
	 * @see \Yngc0der\OAuth2Server\Tables\AuthCodesTable
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string getId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes setId(\string|\Bitrix\Main\DB\SqlExpression $id)
	 * @method bool hasId()
	 * @method bool isIdFilled()
	 * @method bool isIdChanged()
	 * @method \boolean getIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes setIsRevoked(\boolean|\Bitrix\Main\DB\SqlExpression $isRevoked)
	 * @method bool hasIsRevoked()
	 * @method bool isIsRevokedFilled()
	 * @method bool isIsRevokedChanged()
	 * @method \boolean remindActualIsRevoked()
	 * @method \boolean requireIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes resetIsRevoked()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes unsetIsRevoked()
	 * @method \boolean fillIsRevoked()
	 * @method \int getUserId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes setUserId(\int|\Bitrix\Main\DB\SqlExpression $userId)
	 * @method bool hasUserId()
	 * @method bool isUserIdFilled()
	 * @method bool isUserIdChanged()
	 * @method \int remindActualUserId()
	 * @method \int requireUserId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes resetUserId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes unsetUserId()
	 * @method \int fillUserId()
	 * @method \string getClientId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes setClientId(\string|\Bitrix\Main\DB\SqlExpression $clientId)
	 * @method bool hasClientId()
	 * @method bool isClientIdFilled()
	 * @method bool isClientIdChanged()
	 * @method \string remindActualClientId()
	 * @method \string requireClientId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes resetClientId()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes unsetClientId()
	 * @method \string fillClientId()
	 * @method array getScopes()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes setScopes(array|\Bitrix\Main\DB\SqlExpression $scopes)
	 * @method bool hasScopes()
	 * @method bool isScopesFilled()
	 * @method bool isScopesChanged()
	 * @method array remindActualScopes()
	 * @method array requireScopes()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes resetScopes()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes unsetScopes()
	 * @method array fillScopes()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @property-read array $primary
	 * @property-read int $state @see \Bitrix\Main\ORM\Objectify\State
	 * @property-read \Bitrix\Main\Type\Dictionary $customData
	 * @property \Bitrix\Main\Authentication\Context $authContext
	 * @method mixed get($fieldName)
	 * @method mixed remindActual($fieldName)
	 * @method mixed require($fieldName)
	 * @method bool has($fieldName)
	 * @method bool isFilled($fieldName)
	 * @method bool isChanged($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes set($fieldName, $value)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes reset($fieldName)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes unset($fieldName)
	 * @method void addTo($fieldName, $value)
	 * @method void removeFrom($fieldName, $value)
	 * @method void removeAll($fieldName)
	 * @method \Bitrix\Main\ORM\Data\Result delete()
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method mixed[] collectValues($valuesType = \Bitrix\Main\ORM\Objectify\Values::ALL, $fieldsMask = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL)
	 * @method \Bitrix\Main\ORM\Data\AddResult|\Bitrix\Main\ORM\Data\UpdateResult|\Bitrix\Main\ORM\Data\Result save()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodes wakeUp($data)
	 */
	class EO_AuthCodes {
		/* @var \Yngc0der\OAuth2Server\Tables\AuthCodesTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\AuthCodesTable';
		/**
		 * @param bool|array $setDefaultValues
		 */
		public function __construct($setDefaultValues = true) {}
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * EO_AuthCodes_Collection
	 *
	 * Custom methods:
	 * ---------------
	 *
	 * @method \string[] getIdList()
	 * @method \boolean[] getIsRevokedList()
	 * @method \boolean[] fillIsRevoked()
	 * @method \int[] getUserIdList()
	 * @method \int[] fillUserId()
	 * @method \string[] getClientIdList()
	 * @method \string[] fillClientId()
	 * @method array[] getScopesList()
	 * @method array[] fillScopes()
	 *
	 * Common methods:
	 * ---------------
	 *
	 * @property-read \Bitrix\Main\ORM\Entity $entity
	 * @method void add(\Yngc0der\OAuth2Server\Tables\EO_AuthCodes $object)
	 * @method bool has(\Yngc0der\OAuth2Server\Tables\EO_AuthCodes $object)
	 * @method bool hasByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes getByPrimary($primary)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes[] getAll()
	 * @method bool remove(\Yngc0der\OAuth2Server\Tables\EO_AuthCodes $object)
	 * @method void removeByPrimary($primary)
	 * @method void fill($fields = \Bitrix\Main\ORM\Fields\FieldTypeMask::ALL) flag or array of field names
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection wakeUp($data)
	 * @method \Bitrix\Main\ORM\Data\Result save($ignoreEvents = false)
	 * @method void offsetSet() ArrayAccess
	 * @method void offsetExists() ArrayAccess
	 * @method void offsetUnset() ArrayAccess
	 * @method void offsetGet() ArrayAccess
	 * @method void rewind() Iterator
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes current() Iterator
	 * @method mixed key() Iterator
	 * @method void next() Iterator
	 * @method bool valid() Iterator
	 * @method int count() Countable
	 */
	class EO_AuthCodes_Collection implements \ArrayAccess, \Iterator, \Countable {
		/* @var \Yngc0der\OAuth2Server\Tables\AuthCodesTable */
		static public $dataClass = '\Yngc0der\OAuth2Server\Tables\AuthCodesTable';
	}
}
namespace Yngc0der\OAuth2Server\Tables {
	/**
	 * @method static EO_AuthCodes_Query query()
	 * @method static EO_AuthCodes_Result getByPrimary($primary, array $parameters = array())
	 * @method static EO_AuthCodes_Result getById($id)
	 * @method static EO_AuthCodes_Result getList(array $parameters = array())
	 * @method static EO_AuthCodes_Entity getEntity()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodes createObject($setDefaultValues = true)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection createCollection()
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodes wakeUpObject($row)
	 * @method static \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection wakeUpCollection($rows)
	 */
	class AuthCodesTable extends \Bitrix\Main\ORM\Data\DataManager {}
	/**
	 * Common methods:
	 * ---------------
	 *
	 * @method EO_AuthCodes_Result exec()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection fetchCollection()
	 *
	 * Custom methods:
	 * ---------------
	 *
	 */
	class EO_AuthCodes_Query extends \Bitrix\Main\ORM\Query\Query {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes fetchObject()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection fetchCollection()
	 */
	class EO_AuthCodes_Result extends \Bitrix\Main\ORM\Query\Result {}
	/**
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes createObject($setDefaultValues = true)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection createCollection()
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes wakeUpObject($row)
	 * @method \Yngc0der\OAuth2Server\Tables\EO_AuthCodes_Collection wakeUpCollection($rows)
	 */
	class EO_AuthCodes_Entity extends \Bitrix\Main\ORM\Entity {}
}