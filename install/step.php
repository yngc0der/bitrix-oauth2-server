<?php

use Bitrix\Main\Context;
use Bitrix\Main\Localization\Loc;

if (!check_bitrix_sessid()) {
    return false;
}

/** @var CMain $APPLICATION */
global $APPLICATION;

if ($exception = $APPLICATION->GetException()) {
    CAdminMessage::ShowMessage(Loc::getMessage('MOD_INST_ERR'));
} else {
    CAdminMessage::ShowNote(Loc::getMessage('MOD_INST_OK'));
}

$context = Context::getCurrent();
?>
<form action="<?= $context->getRequest()->getRequestedPage(); ?>">
    <input type="hidden" name="lang" value="<?= $context->getLanguage(); ?>">
    <input type="submit" name="" value="<?= Loc::getMessage('MOD_BACK'); ?>">
</form>
