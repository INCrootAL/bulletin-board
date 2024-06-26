<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />
<?$APPLICATION->ShowHead();?>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<?php
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popup.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/ajax.js");
?>
<?$byNew = $USER->GetID();
            $rsUserNew = CUser::GetByID($byNew);
            $arUserNew = $rsUserNew->Fetch();
            $arUserNew["UF_AD_APP"];
            ?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="page-wrapper"></div>
	<div id="header">
	    <div id="header-logo">
	        <a href="/" class="logo" id="logo"><svg width="126" height="31" viewBox="0 0 126 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_17)">
                <path d="M31.7426 24.5873C32.6558 3.30847 15.8866 5.80148e-05 15.8866 5.80148e-05H47.6006C48.8346 -0.162344 30.8089 46.3699 31.7426 24.5873Z" fill="#5E9FF2"/>
                <path d="M15.9173 6.41279C15.0041 27.6916 31.7733 31 31.7733 31H0.0613506C-1.17264 31.1624 16.853 -15.3699 15.9194 6.41279H15.9173Z" fill="#035AA6"/>
                <path d="M64.2329 14.1061L64.2166 6.58563L60.5596 12.809H59.6361L55.9791 6.68349V14.1061H54.0076V2.76086H55.7094L60.1305 10.2813L64.472 2.76086H66.1738L66.1902 14.1061H64.235H64.2329Z" fill="black"/>
                <path d="M75.1182 6.26913C75.7802 6.87918 76.1132 7.80154 76.1132 9.03205V14.104H74.2356V13.0504C73.9925 13.4294 73.6452 13.7188 73.1937 13.9166C72.7422 14.1165 72.1987 14.2164 71.5633 14.2164C70.928 14.2164 70.3702 14.1061 69.8942 13.8833C69.4182 13.6626 69.0484 13.3544 68.7889 12.9588C68.5294 12.5653 68.3987 12.1177 68.3987 11.6221C68.3987 10.8434 68.6827 10.2209 69.2506 9.75036C69.8186 9.27981 70.7114 9.04454 71.9311 9.04454H74.1253V8.91545C74.1253 8.30957 73.9476 7.84526 73.5921 7.52254C73.2366 7.19774 72.7095 7.03742 72.0087 7.03742C71.5327 7.03742 71.0628 7.11237 70.6011 7.26436C70.1393 7.41636 69.7491 7.62665 69.4325 7.89732L68.6541 6.42321C69.0994 6.07758 69.6347 5.81316 70.2599 5.62994C70.8851 5.44671 71.549 5.3551 72.2478 5.3551C73.4981 5.3551 74.4563 5.66117 75.1182 6.27122V6.26913ZM73.306 12.3946C73.6922 12.1614 73.9659 11.8304 74.1253 11.3973V10.3916H72.0741C70.93 10.3916 70.3559 10.7747 70.3559 11.543C70.3559 11.9095 70.4989 12.203 70.7849 12.4175C71.071 12.634 71.4694 12.7423 71.9781 12.7423C72.4868 12.7423 72.9179 12.6257 73.306 12.3946Z" fill="black"/>
                <path d="M83.5702 5.35303V7.28103C83.4007 7.24772 83.2474 7.23314 83.1085 7.23314C82.3342 7.23314 81.7295 7.46217 81.2963 7.92231C80.8612 8.38245 80.6446 9.04246 80.6446 9.90861V14.1061H78.6567V5.45089H80.5486V6.7147C81.1206 5.80692 82.1278 5.35303 83.5702 5.35303Z" fill="black"/>
                <path d="M85.3518 3.67692C85.1087 3.44373 84.9861 3.1564 84.9861 2.81078C84.9861 2.46516 85.1087 2.17575 85.3518 1.94256C85.5949 1.70936 85.8973 1.59485 86.2589 1.59485C86.6205 1.59485 86.9208 1.7052 87.166 1.92798C87.4091 2.14868 87.5317 2.42768 87.5317 2.76289C87.5317 3.11893 87.4132 3.41875 87.1742 3.66235C86.9351 3.90595 86.6307 4.02671 86.2589 4.02671C85.8871 4.02671 85.5969 3.91012 85.3518 3.679V3.67692ZM85.2558 5.45085H87.2436V14.106H85.2558V5.45085Z" fill="black"/>
                <path d="M94.9582 13.6355C94.7253 13.8292 94.4413 13.9749 94.1063 14.0728C93.7732 14.1706 93.4198 14.2185 93.048 14.2185C92.1143 14.2185 91.3931 13.9707 90.8844 13.4731C90.3757 12.9755 90.1203 12.253 90.1203 11.3015V7.13737H88.7208V5.51752H90.1203V3.53955H92.1082V5.51752H94.3821V7.13737H92.1082V11.2536C92.1082 11.6742 92.2083 11.9969 92.4105 12.2176C92.6128 12.4383 92.9029 12.5508 93.285 12.5508C93.7303 12.5508 94.1022 12.4321 94.3984 12.1947L94.9541 13.6376L94.9582 13.6355Z" fill="black"/>
                <path d="M96.6906 3.67692C96.4475 3.44373 96.325 3.1564 96.325 2.81078C96.325 2.46516 96.4475 2.17575 96.6906 1.94256C96.9338 1.70936 97.2361 1.59485 97.5978 1.59485C97.9594 1.59485 98.2597 1.7052 98.5049 1.92798C98.748 2.14868 98.8706 2.42768 98.8706 2.76289C98.8706 3.11893 98.7521 3.41875 98.513 3.66235C98.274 3.90595 97.9696 4.02671 97.5978 4.02671C97.2259 4.02671 96.9358 3.91012 96.6906 3.679V3.67692ZM96.5946 5.45085H98.5825V14.106H96.5946V5.45085Z" fill="black"/>
                <path d="M114.455 6.30245C115.08 6.9354 115.393 7.88275 115.393 9.14657V14.1061H113.405V9.40683C113.405 8.65103 113.239 8.08054 112.912 7.69744C112.583 7.31434 112.111 7.12279 111.496 7.12279C110.828 7.12279 110.293 7.34765 109.891 7.7953C109.488 8.24295 109.286 8.88422 109.286 9.71497V14.1061H107.298V9.40683C107.298 8.65103 107.135 8.08054 106.806 7.69744C106.477 7.31434 106.005 7.12279 105.39 7.12279C104.712 7.12279 104.174 7.34349 103.776 7.78697C103.377 8.23045 103.179 8.87381 103.179 9.71497V14.1061H101.191V5.45089H103.083V6.5523C103.402 6.16295 103.798 5.8673 104.276 5.66117C104.752 5.45505 105.284 5.35303 105.866 5.35303C106.501 5.35303 107.067 5.47379 107.56 5.71739C108.052 5.96099 108.442 6.31911 108.728 6.7959C109.078 6.34201 109.529 5.98806 110.081 5.73405C110.632 5.48003 111.241 5.35303 111.909 5.35303C112.98 5.35303 113.828 5.6695 114.455 6.30037V6.30245Z" fill="black"/>
                <path d="M125.967 10.427H119.303C119.419 11.0641 119.724 11.5701 120.218 11.9428C120.713 12.3155 121.324 12.5029 122.055 12.5029C122.989 12.5029 123.757 12.1905 124.362 11.5638L125.428 12.811C125.046 13.2753 124.564 13.6272 123.982 13.8645C123.399 14.1019 122.741 14.2206 122.01 14.2206C121.076 14.2206 120.255 14.0311 119.544 13.6542C118.833 13.2753 118.286 12.7485 117.897 12.0739C117.511 11.3994 117.317 10.6352 117.317 9.78158C117.317 8.92793 117.505 8.18047 117.881 7.5038C118.257 6.8292 118.78 6.30244 119.448 5.9235C120.116 5.54456 120.868 5.35718 121.706 5.35718C122.543 5.35718 123.273 5.54456 123.924 5.91726C124.576 6.28995 125.085 6.81463 125.45 7.48922C125.816 8.16381 126 8.94459 126 9.83155C126 9.97105 125.99 10.1709 125.967 10.4312V10.427ZM120.092 7.5496C119.652 7.9327 119.385 8.44281 119.289 9.08201H124.108C124.022 8.4553 123.763 7.94728 123.33 7.55793C122.895 7.16858 122.353 6.97495 121.708 6.97495C121.062 6.97495 120.533 7.1665 120.094 7.5496H120.092Z" fill="black"/>
                <path d="M54.4203 29.832C53.7624 29.6487 53.2374 29.4155 52.8451 29.1345L53.6092 27.5958C53.9912 27.8561 54.4489 28.0643 54.9841 28.2204C55.5194 28.3766 56.0465 28.4557 56.5675 28.4557C57.7545 28.4557 58.349 28.1371 58.349 27.5C58.349 27.1981 58.1978 26.9878 57.8955 26.8671C57.5931 26.7484 57.1089 26.6339 56.4408 26.5277C55.7421 26.4194 55.1721 26.2945 54.7308 26.155C54.2916 26.0155 53.9095 25.7698 53.5867 25.418C53.2639 25.0661 53.1025 24.5789 53.1025 23.9522C53.1025 23.1318 53.4396 22.4739 54.1118 21.9825C54.7839 21.4912 55.6951 21.2455 56.8392 21.2455C57.4215 21.2455 58.0058 21.3142 58.5881 21.4474C59.1703 21.5828 59.6484 21.7639 60.0202 21.9909L59.2561 23.5295C58.5349 23.0964 57.7239 22.882 56.8229 22.882C56.2406 22.882 55.7973 22.9715 55.4949 23.1485C55.1925 23.3255 55.0414 23.5607 55.0414 23.8543C55.0414 24.1791 55.2028 24.4082 55.5256 24.5435C55.8484 24.6788 56.3489 24.8058 57.0292 24.9245C57.7075 25.0328 58.2632 25.1577 58.6984 25.2972C59.1335 25.4388 59.5074 25.6761 59.82 26.0114C60.1326 26.3466 60.2899 26.8213 60.2899 27.4376C60.2899 28.2475 59.9446 28.8971 59.2561 29.3822C58.5676 29.8674 57.6278 30.111 56.4408 30.111C55.7523 30.111 55.0781 30.0193 54.4203 29.8361V29.832Z" fill="black"/>
                <path d="M69.9576 26.3133H63.2932C63.4097 26.9504 63.7141 27.4563 64.2085 27.829C64.7029 28.2017 65.3138 28.3891 66.0452 28.3891C66.9788 28.3891 67.747 28.0768 68.3518 27.4501L69.4182 28.6972C69.0362 29.1615 68.554 29.5134 67.9718 29.7508C67.3895 29.9881 66.7316 30.1068 66.0002 30.1068C65.0666 30.1068 64.2453 29.9173 63.5343 29.5405C62.8233 29.1615 62.2758 28.6348 61.8876 27.9602C61.5015 27.2856 61.3074 26.5215 61.3074 25.6678C61.3074 24.8142 61.4953 24.0667 61.8713 23.39C62.2472 22.7154 62.7702 22.1887 63.4383 21.8097C64.1063 21.4308 64.8582 21.2434 65.6958 21.2434C66.5335 21.2434 67.2628 21.4308 67.9145 21.8035C68.5663 22.1762 69.075 22.7009 69.4407 23.3755C69.8064 24.05 69.9903 24.8308 69.9903 25.7178C69.9903 25.8573 69.9801 26.0572 69.9576 26.3174V26.3133ZM64.0818 23.4358C63.6426 23.8189 63.3749 24.329 63.2789 24.9682H68.0984C68.0126 24.3415 67.7531 23.8335 67.32 23.4442C66.8849 23.0548 66.3435 22.8612 65.6979 22.8612C65.0523 22.8612 64.5231 23.0527 64.0839 23.4358H64.0818Z" fill="black"/>
                <path d="M76.8119 21.2413V23.1693C76.6424 23.136 76.4891 23.1214 76.3502 23.1214C75.5759 23.1214 74.9712 23.3505 74.538 23.8106C74.1029 24.2708 73.8863 24.9308 73.8863 25.7969V29.9944H71.8984V21.3392H73.7903V22.603C74.3623 21.6952 75.3695 21.2413 76.8119 21.2413Z" fill="black"/>
                <path d="M86.7676 21.3391L83.1248 29.9943H81.0736L77.4309 21.3391H79.4985L82.1381 27.7581L84.8573 21.3391H86.7655H86.7676Z" fill="black"/>
                <path d="M88.1037 19.5632C87.8606 19.33 87.738 19.0426 87.738 18.697C87.738 18.3514 87.8606 18.062 88.1037 17.8288C88.3469 17.5956 88.6492 17.4811 89.0108 17.4811C89.3725 17.4811 89.6728 17.5914 89.918 17.8142C90.1611 18.0349 90.2837 18.3139 90.2837 18.6491C90.2837 19.0052 90.1652 19.305 89.9261 19.5486C89.6871 19.7922 89.3827 19.9129 89.0108 19.9129C88.639 19.9129 88.3489 19.7963 88.1037 19.5652V19.5632ZM88.0077 21.3371H89.9956V29.9923H88.0077V21.3371Z" fill="black"/>
                <path d="M94.1307 29.5405C93.432 29.1615 92.8845 28.6348 92.4922 27.9602C92.0999 27.2856 91.9038 26.5215 91.9038 25.6678C91.9038 24.8142 92.0999 24.0521 92.4922 23.3817C92.8845 22.7113 93.4279 22.1887 94.1225 21.8097C94.8172 21.4308 95.6099 21.2434 96.5006 21.2434C97.3383 21.2434 98.0717 21.4162 98.703 21.7618C99.3343 22.1075 99.8083 22.6051 100.127 23.2526L98.6009 24.1604C98.3557 23.7606 98.0513 23.4608 97.6856 23.2609C97.3199 23.0611 96.9195 22.9611 96.4843 22.9611C95.7427 22.9611 95.1277 23.2068 94.6394 23.6982C94.1511 24.1895 93.908 24.8454 93.908 25.6678C93.908 26.4902 94.1491 27.1461 94.6313 27.6375C95.1134 28.1288 95.7304 28.3745 96.4843 28.3745C96.9195 28.3745 97.3199 28.2746 97.6856 28.0747C98.0513 27.8748 98.3557 27.575 98.6009 27.1752L100.127 28.083C99.7981 28.7305 99.318 29.2302 98.6887 29.5821C98.0574 29.934 97.3281 30.1089 96.5027 30.1089C95.6221 30.1089 94.8335 29.9194 94.1328 29.5426L94.1307 29.5405Z" fill="black"/>
                <path d="M109.668 26.3133H103.004C103.12 26.9504 103.425 27.4563 103.919 27.829C104.413 28.2017 105.024 28.3891 105.756 28.3891C106.689 28.3891 107.457 28.0768 108.062 27.4501L109.129 28.6972C108.747 29.1615 108.264 29.5134 107.682 29.7508C107.1 29.9881 106.442 30.1068 105.711 30.1068C104.777 30.1068 103.956 29.9173 103.245 29.5405C102.534 29.1615 101.986 28.6348 101.598 27.9602C101.212 27.2856 101.018 26.5215 101.018 25.6678C101.018 24.8142 101.206 24.0667 101.582 23.39C101.958 22.7154 102.481 22.1887 103.149 21.8097C103.817 21.4308 104.569 21.2434 105.406 21.2434C106.244 21.2434 106.973 21.4308 107.625 21.8035C108.277 22.1762 108.785 22.7009 109.151 23.3755C109.517 24.05 109.701 24.8308 109.701 25.7178C109.701 25.8573 109.69 26.0572 109.668 26.3174V26.3133ZM103.792 23.4358C103.353 23.8189 103.085 24.329 102.989 24.9682H107.809C107.723 24.3415 107.464 23.8335 107.03 23.4442C106.595 23.0548 106.054 22.8612 105.408 22.8612C104.763 22.8612 104.234 23.0527 103.794 23.4358H103.792Z" fill="black"/>
                </g>
                <defs>
                <clipPath id="clip0_1_17">
                <rect width="126" height="31" fill="white"/>
                </clipPath>
                </defs>
                </svg>
            </a>
        </div>
        
        <?if ($arUserNew["UF_AD_APP"] != "4") {?>
    	    <div id="header-title">
    	        <a class="menu_item" <?if($APPLICATION->GetCurPage() == '/vacancies/'){?> style="color: #035AA6;border-bottom: 1px solid #035AA6;line-height: 71px;"<?}?> href="/vacancies/">Вакансии</a>
    			<a class="menu_item" <?if($APPLICATION->GetCurPage() == '/resume/'){?> style="color: #035AA6;border-bottom: 1px solid #035AA6;line-height: 71px;"<?}?> href="/resume/">Резюме</a>
    			<a class="menu_item_board"<?if($APPLICATION->GetCurPage() == '/board/'){?> style="color: #035AA6;border-bottom: 1px solid #035AA6;line-height: 71px;"<?}?> href="/board/">Доска Объявлений</a>
    			<a class="menu_item_comp" <?if($APPLICATION->GetCurPage() == '/about/'){?> style="color: #035AA6;border-bottom: 1px solid #035AA6;line-height: 71px;"<?}?> href="/about/">О Нас</a>
            </div>
        <?} else {?>
            <div id="header-title" style="margin-right: 108.4px;">
    	        <a class="menu_item">Личный кабинет администратора</a>
    			<a class="menu_item"></a>
    			<a class="menu_item_board"></a>
    			<a class="menu_item_comp"></a>
            </div>
        <?}?>
    	<div id="header-auth">
    		<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "info", array(
    			"REGISTER_URL" => SITE_DIR."login/",
    			"PROFILE_URL" => SITE_DIR."personal/profile/",
    			"SHOW_ERRORS" => "N"
    			),
    			false,
    			Array()
    		);?>
    	</div>
    	</div>
    <? if(($APPLICATION->GetCurPage() == '/vacancies/' || $APPLICATION->GetCurPage() == '/' || $APPLICATION->GetCurPage() == '/adm_resume/' || $APPLICATION->GetCurPage() == '/adm-bord/' || $APPLICATION->GetCurPage() == '/about/' || $APPLICATION->GetCurPage() == '/personal/profile/' || $APPLICATION->GetCurPage() == '/personal/profile/vac/'|| $APPLICATION->GetCurPage() == '/personal/profile/wishlist/' || $APPLICATION->GetCurPage() == '/personal/profile/settings/' || $APPLICATION->GetCurPage() == '/board/' || $APPLICATION->GetCurPage() == '/resume/' || $APPLICATION->GetCurPage() ==  '/personal/profile/vac/responses/')){?>
	<div id="page-body" style="background: rgba(202, 202, 202, 0.15)">
	 <?} else {?> 
	 <div id="page-body">
	     <?}?>
	<table width="100%" cellspacing="0" cellpadding="0" >
		<tr>
		<?$arCurDir = explode("/", $APPLICATION->GetCurDir());?>
		<td <?if (!array_search('forum', $arCurDir)):?>width="60%"<?endif;?> class="page-left">
		<?if ($APPLICATION->GetCurDir() != SITE_DIR):?>
		<? if ($APPLICATION->GetCurPage() == '/vacancies/' || $APPLICATION->GetCurPage() == '/board/' || $APPLICATION->GetCurPage() == '/resume/') { ?> 
		<?} else if ($APPLICATION->GetCurPage() == '/vacancies/detailed/' || $APPLICATION->GetCurPage() == '/resume/detailed/') {?>
    		<div class="page-left-top" id="page-left-top" style="height: 726px; background: rgba(202, 202, 202, 0.15);">
    		</div>
        <?} else if ($APPLICATION->GetCurPage() == '/politics/') { ?>
    		<div class="page-left-top" style="background: url(/bitrix/templates/maritime_service/images/ms_group.png) 100% 100% no-repeat;">
        		<div class="page-left-top-up-pol">    
                    <?$APPLICATION->IncludeComponent(
                    	"bitrix:breadcrumb",
                    	"",
                    	Array(
                    		"PATH" => "",
                    		"SITE_ID" => "s1",
                    		"START_FROM" => "0"
                    	)
                    );?>
            		<h1><?$APPLICATION->ShowTitle()?></h1>
        		</div>
    		</div>
        <?} else if($APPLICATION->GetCurPage() == '/about/') {?>
            <div class="page-left-top" style="background: unset;">
        		<div class="page-left-top-up">    
                    <?$APPLICATION->IncludeComponent(
                    	"bitrix:breadcrumb",
                    	"",
                    	Array(
                    		"PATH" => "",
                    		"SITE_ID" => "s1",
                    		"START_FROM" => "0"
                    	)
                    );?>
            		<h1><?$APPLICATION->ShowTitle()?></h1>
        		</div>
    		</div>
        <?} else if ($APPLICATION->GetCurPage() == '/personal/profile/' || $APPLICATION->GetCurPage() == '/personal/profile/vac/' || $APPLICATION->GetCurPage() == '/personal/profile/vac/responses/' 
        || $APPLICATION->GetCurPage() == '/personal/profile/wishlist/' || $APPLICATION->GetCurPage() == '/personal/profile/settings/' || $APPLICATION->GetCurPage() == '/adm_resume/' || $APPLICATION->GetCurPage() == '/adm-bord/'){?>
        <?} else if ($APPLICATION->GetCurPage() == '/search/') {?>
            <div class="page-left-top" style="height:460px">
        		<div class="page-left-top-up">    
                    <?$APPLICATION->IncludeComponent(
                    	"bitrix:breadcrumb",
                    	"",
                    	Array(
                    		"PATH" => "",
                    		"SITE_ID" => "s1",
                    		"START_FROM" => "0"
                    	)
                    );?>
            		<h1><?$APPLICATION->ShowTitle()?></h1>
        		</div>
    		</div>
        <?} else if ($APPLICATION->GetCurPage() == '/vacancies/detailed/company/') {?>
            <div class="page-left-top" style="height:613px;background: rgba(202, 202, 202, 0.15);">
            		<div class="page-left-top-up" style="margin-top: 116px;">    
                        <?$APPLICATION->IncludeComponent(
                        	"bitrix:breadcrumb",
                        	"",
                        	Array(
                        		"PATH" => "",
                        		"SITE_ID" => "s1",
                        		"START_FROM" => "0"
                        	)
                        );?>
            		<h1><?$APPLICATION->ShowTitle()?></h1>
        		</div>
    		</div>
        <?} else {?>
            <div class="page-left-top">
            		<div class="page-left-top-up">    
                        <?$APPLICATION->IncludeComponent(
                        	"bitrix:breadcrumb",
                        	"",
                        	Array(
                        		"PATH" => "",
                        		"SITE_ID" => "s1",
                        		"START_FROM" => "0"
                        	)
                        );?>
            		<h1><?$APPLICATION->ShowTitle()?></h1>
        		</div>
    		</div>
        <?}?>
		<?endif;?>