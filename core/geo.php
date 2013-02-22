<?


	/******************************************************************************************************
	*** Package: AVA-Panel Version 3.0
	*** Copyright (c) 2006, Anton A. Rassypaeff. All rights reserved
	*** License: GNU General Public License v3
	*** Author: Anton A. Rassypaeff | Рассыпаев Антон Александрович
	*** Contacts:
	***   Site: http://ava-panel.ru
	***   E-mail: manage@ava-panel.ru
	******************************************************************************************************/


class Geo extends objectInterface{
	/*
		Географический класс
	*/

	private static $countries = array(
		'AF'=>'{Call:Lang:core:core:afganistan}',
		'AL'=>'{Call:Lang:core:core:albaniia}',
		'DZ'=>'{Call:Lang:core:core:alzhir}',
		'AS'=>'{Call:Lang:core:core:amerikanskoe}',
		'AD'=>'{Call:Lang:core:core:andorra}',
		'AO'=>'{Call:Lang:core:core:angola}',
		'AI'=>'{Call:Lang:core:core:angilia}',
		'AQ'=>'{Call:Lang:core:core:antarktika}',
		'AG'=>'{Call:Lang:core:core:antiguaibarb}',
		'AR'=>'{Call:Lang:core:core:argentina}',
		'AM'=>'{Call:Lang:core:core:armeniia}',
		'AW'=>'{Call:Lang:core:core:aruba}',
		'AU'=>'{Call:Lang:core:core:avstraliia}',
		'AT'=>'{Call:Lang:core:core:avstriia}',
		'AZ'=>'{Call:Lang:core:core:azerbajdzhan}',
		'BS'=>'{Call:Lang:core:core:bagamy}',
		'BH'=>'{Call:Lang:core:core:bakhrejn}',
		'BD'=>'{Call:Lang:core:core:bangladesh}',
		'BB'=>'{Call:Lang:core:core:barbados}',
		'BY'=>'{Call:Lang:core:core:belarus}',
		'BE'=>'{Call:Lang:core:core:belgiia}',
		'BZ'=>'{Call:Lang:core:core:beliz}',
		'BJ'=>'{Call:Lang:core:core:benin}',
		'BM'=>'{Call:Lang:core:core:bermudi}',
		'BT'=>'{Call:Lang:core:core:butan}',
		'BO'=>'{Call:Lang:core:core:boliviia}',
		'BA'=>'{Call:Lang:core:core:bosniiaigert}',
		'BW'=>'{Call:Lang:core:core:botsvana}',
		'BV'=>'{Call:Lang:core:core:ostrovbuve}',
		'BR'=>'{Call:Lang:core:core:brazilia}',
		'IO'=>'{Call:Lang:core:core:britanskiete}',
		'BN'=>'{Call:Lang:core:core:brunej}',
		'BG'=>'{Call:Lang:core:core:bolgariia}',
		'BI'=>'{Call:Lang:core:core:burundi}',
		'KH'=>'{Call:Lang:core:core:kambodzha}',
		'CM'=>'{Call:Lang:core:core:kamerun}',
		'CA'=>'{Call:Lang:core:core:kanada}',
		'CV'=>'{Call:Lang:core:core:kaboverde}',
		'KY'=>'{Call:Lang:core:core:kajmanovyost}',
		'CF'=>'{Call:Lang:core:core:tsentralnoaf}',
		'TD'=>'{Call:Lang:core:core:chad}',
		'CL'=>'{Call:Lang:core:core:chili}',
		'CN'=>'{Call:Lang:core:core:kitaj}',
		'CX'=>'{Call:Lang:core:core:ostrovrozhde}',
		'CC'=>'{Call:Lang:core:core:koksovyeostr}',
		'CO'=>'{Call:Lang:core:core:kolumbiia}',
		'KM'=>'{Call:Lang:core:core:komorskieost}',
		'CG'=>'{Call:Lang:core:core:kongo}',
		'CK'=>'{Call:Lang:core:core:ostrovakuka}',
		'CR'=>'{Call:Lang:core:core:kostarika}',
		'CI'=>'{Call:Lang:core:core:kotdivuar}',
		'HR'=>'{Call:Lang:core:core:khorvatiia}',
		'CU'=>'{Call:Lang:core:core:kuba}',
		'CY'=>'{Call:Lang:core:core:kipr}',
		'CZ'=>'{Call:Lang:core:core:cheshskaiare}',
		'DK'=>'{Call:Lang:core:core:daniia}',
		'DJ'=>'{Call:Lang:core:core:dzhibuti}',
		'DM'=>'{Call:Lang:core:core:dominik}',
		'DO'=>'{Call:Lang:core:core:dominikanska}',
		'TP'=>'{Call:Lang:core:core:vostochnyjti}',
		'EC'=>'{Call:Lang:core:core:ehkvador}',
		'EG'=>'{Call:Lang:core:core:egipet}',
		'SV'=>'{Call:Lang:core:core:salvador}',
		'GQ'=>'{Call:Lang:core:core:ehkvatorialn}',
		'ER'=>'{Call:Lang:core:core:ehritreia}',
		'EE'=>'{Call:Lang:core:core:ehstoniia}',
		'ET'=>'{Call:Lang:core:core:ehfiopiia}',
		'FK'=>'{Call:Lang:core:core:folklendskie}',
		'FO'=>'{Call:Lang:core:core:faraonovyost}',
		'FJ'=>'{Call:Lang:core:core:fidzhi}',
		'FI'=>'{Call:Lang:core:core:finliandiia}',
		'FR'=>'{Call:Lang:core:core:frantsiia}',
		'GF'=>'{Call:Lang:core:core:frantsuzskai}',
		'PF'=>'{Call:Lang:core:core:frantsuzskai1}',
		'TF'=>'{Call:Lang:core:core:frantsuzskie}',
		'GA'=>'{Call:Lang:core:core:gibon}',
		'GM'=>'{Call:Lang:core:core:gambiia}',
		'GE'=>'{Call:Lang:core:core:gruziia}',
		'DE'=>'{Call:Lang:core:core:germaniia}',
		'GH'=>'{Call:Lang:core:core:gana}',
		'GI'=>'{Call:Lang:core:core:gibraltar}',
		'GR'=>'{Call:Lang:core:core:gretsiia}',
		'GL'=>'{Call:Lang:core:core:grenlandiia}',
		'GD'=>'{Call:Lang:core:core:grenada}',
		'GP'=>'{Call:Lang:core:core:gvadalupa}',
		'GU'=>'{Call:Lang:core:core:guam}',
		'GT'=>'{Call:Lang:core:core:gvatamala}',
		'GN'=>'{Call:Lang:core:core:gvineia}',
		'GW'=>'{Call:Lang:core:core:gvineiabisau}',
		'GY'=>'{Call:Lang:core:core:gviana}',
		'HT'=>'{Call:Lang:core:core:gaiti}',
		'HM'=>'{Call:Lang:core:core:ostrovakherd}',
		'HN'=>'{Call:Lang:core:core:ganduras}',
		'HK'=>'{Call:Lang:core:core:gongkong}',
		'HU'=>'{Call:Lang:core:core:vengriia}',
		'IS'=>'{Call:Lang:core:core:islandiia}',
		'IN'=>'{Call:Lang:core:core:indiia}',
		'ID'=>'{Call:Lang:core:core:indoneziia}',
		'IR'=>'{Call:Lang:core:core:iran}',
		'IQ'=>'{Call:Lang:core:core:irak}',
		'IE'=>'{Call:Lang:core:core:irlandiia}',
		'IL'=>'{Call:Lang:core:core:izrail}',
		'IT'=>'{Call:Lang:core:core:italiia}',
		'JM'=>'{Call:Lang:core:core:iamajka}',
		'JP'=>'{Call:Lang:core:core:iaponiia}',
		'JO'=>'{Call:Lang:core:core:iordaniia}',
		'KZ'=>'{Call:Lang:core:core:kazakhstan}',
		'KE'=>'{Call:Lang:core:core:keniia}',
		'KI'=>'{Call:Lang:core:core:kiribati}',
		'KP'=>'{Call:Lang:core:core:kndr}',
		'KR'=>'{Call:Lang:core:core:koreia}',
		'KW'=>'{Call:Lang:core:core:kuvejt}',
		'KG'=>'{Call:Lang:core:core:kyrgyzstan}',
		'LA'=>'{Call:Lang:core:core:laos}',
		'LV'=>'{Call:Lang:core:core:latviia}',
		'LB'=>'{Call:Lang:core:core:livan}',
		'LS'=>'{Call:Lang:core:core:lesoto}',
		'LR'=>'{Call:Lang:core:core:liberiia}',
		'LY'=>'{Call:Lang:core:core:liviia}',
		'LI'=>'{Call:Lang:core:core:likhtenshtej}',
		'LT'=>'{Call:Lang:core:core:litva}',
		'LU'=>'{Call:Lang:core:core:liuksemburg}',
		'MO'=>'{Call:Lang:core:core:makau}',
		'MK'=>'{Call:Lang:core:core:makedoniia}',
		'MG'=>'{Call:Lang:core:core:madagaskar}',
		'MW'=>'{Call:Lang:core:core:malavi}',
		'MY'=>'{Call:Lang:core:core:malaziia}',
		'MV'=>'{Call:Lang:core:core:maldivy}',
		'ML'=>'{Call:Lang:core:core:mali}',
		'MT'=>'{Call:Lang:core:core:malta}',
		'MH'=>'{Call:Lang:core:core:marshalovyos}',
		'MQ'=>'{Call:Lang:core:core:martinika}',
		'MR'=>'{Call:Lang:core:core:mavritaniia}',
		'MU'=>'{Call:Lang:core:core:mavrikij}',
		'YT'=>'{Call:Lang:core:core:majotta}',
		'MX'=>'{Call:Lang:core:core:meksika}',
		'FM'=>'{Call:Lang:core:core:mikroneziia}',
		'MD'=>'{Call:Lang:core:core:moldaviia}',
		'MC'=>'{Call:Lang:core:core:monako}',
		'MN'=>'{Call:Lang:core:core:mongoliia}',
		'MS'=>'{Call:Lang:core:core:monserrat}',
		'MA'=>'{Call:Lang:core:core:marokko}',
		'MZ'=>'{Call:Lang:core:core:mozambik}',
		'MM'=>'{Call:Lang:core:core:mianma}',
		'NA'=>'{Call:Lang:core:core:nambiia}',
		'NR'=>'{Call:Lang:core:core:nauru}',
		'NP'=>'{Call:Lang:core:core:nepal}',
		'NL'=>'{Call:Lang:core:core:niderlandy}',
		'AN'=>'{Call:Lang:core:core:niderlandski}',
		'NC'=>'{Call:Lang:core:core:novaiakaledo}',
		'NZ'=>'{Call:Lang:core:core:novaiazeland}',
		'NI'=>'{Call:Lang:core:core:nikaragua}',
		'NE'=>'{Call:Lang:core:core:niger}',
		'NG'=>'{Call:Lang:core:core:nigeriia}',
		'NU'=>'{Call:Lang:core:core:niueh}',
		'NF'=>'{Call:Lang:core:core:norfolk}',
		'MP'=>'{Call:Lang:core:core:severnyemari}',
		'NO'=>'{Call:Lang:core:core:norvegiia}',
		'OM'=>'{Call:Lang:core:core:oman}',
		'PK'=>'{Call:Lang:core:core:pakistan}',
		'PW'=>'{Call:Lang:core:core:palau}',
		'PA'=>'{Call:Lang:core:core:panama}',
		'PG'=>'{Call:Lang:core:core:papuanovaiag}',
		'PY'=>'{Call:Lang:core:core:paragvaj}',
		'PE'=>'{Call:Lang:core:core:peru}',
		'PH'=>'{Call:Lang:core:core:fillipiny}',
		'PN'=>'{Call:Lang:core:core:pitkairn}',
		'PL'=>'{Call:Lang:core:core:polsha}',
		'PT'=>'{Call:Lang:core:core:portugaliia}',
		'PR'=>'{Call:Lang:core:core:puehrtoriko}',
		'QA'=>'{Call:Lang:core:core:katar}',
		'RO'=>'{Call:Lang:core:core:rumyniia}',
		'RU'=>'{Call:Lang:core:core:rossiia}',
		'RW'=>'{Call:Lang:core:core:ruanda}',
		'KN'=>'{Call:Lang:core:core:sentkitsinev}',
		'LC'=>'{Call:Lang:core:core:sentliusiia}',
		'VC'=>'{Call:Lang:core:core:sentvinsenti}',
		'WS'=>'{Call:Lang:core:core:samoa}',
		'SM'=>'{Call:Lang:core:core:sanmarino}',
		'ST'=>'{Call:Lang:core:core:santomeiprin}',
		'SA'=>'{Call:Lang:core:core:saudovskaiaa}',
		'SN'=>'{Call:Lang:core:core:senegal}',
		'CS'=>'{Call:Lang:core:core:serbiiaicher}',
		'SC'=>'{Call:Lang:core:core:respublikase}',
		'SL'=>'{Call:Lang:core:core:serraleone}',
		'SG'=>'{Call:Lang:core:core:singapur}',
		'SK'=>'{Call:Lang:core:core:slovakiia}',
		'SI'=>'{Call:Lang:core:core:sloveniia}',
		'SB'=>'{Call:Lang:core:core:salomonovyos}',
		'SO'=>'{Call:Lang:core:core:somali}',
		'ZA'=>'{Call:Lang:core:core:iuar}',
		'GS'=>'{Call:Lang:core:core:iuzhnaiadzho}',
		'ES'=>'{Call:Lang:core:core:ispaniia}',
		'LK'=>'{Call:Lang:core:core:shrilanka}',
		'SH'=>'{Call:Lang:core:core:ostrovsvelen}',
		'PM'=>'{Call:Lang:core:core:senperimikel}',
		'SD'=>'{Call:Lang:core:core:sudan}',
		'SR'=>'{Call:Lang:core:core:stsurinam}',
		'SJ'=>'{Call:Lang:core:core:shpitsbergen}',
		'SZ'=>'{Call:Lang:core:core:svazilend}',
		'SE'=>'{Call:Lang:core:core:shvetsiia}',
		'CH'=>'{Call:Lang:core:core:shvetsariia}',
		'SY'=>'{Call:Lang:core:core:siriia}',
		'TW'=>'{Call:Lang:core:core:tajvan}',
		'TJ'=>'{Call:Lang:core:core:tadzhikistan}',
		'TZ'=>'{Call:Lang:core:core:tanzaniia}',
		'TH'=>'{Call:Lang:core:core:tajland}',
		'TG'=>'{Call:Lang:core:core:togo}',
		'TK'=>'{Call:Lang:core:core:tokelau}',
		'TO'=>'{Call:Lang:core:core:tonga}',
		'TT'=>'{Call:Lang:core:core:trinidaditab}',
		'TN'=>'{Call:Lang:core:core:tunis}',
		'TR'=>'{Call:Lang:core:core:turtsiia}',
		'TM'=>'{Call:Lang:core:core:turkmenistan}',
		'TC'=>'{Call:Lang:core:core:ostrovateksi}',
		'TV'=>'{Call:Lang:core:core:tuvalu}',
		'UG'=>'{Call:Lang:core:core:uganda}',
		'UA'=>'{Call:Lang:core:core:ukraina}',
		'AE'=>'{Call:Lang:core:core:obedinennyea}',
		'GB'=>'{Call:Lang:core:core:velikobritan}',
		'UM'=>'{Call:Lang:core:core:malyeotdalen}',
		'US'=>'{Call:Lang:core:core:soedinennyes}',
		'UY'=>'{Call:Lang:core:core:urugvaj}',
		'UZ'=>'{Call:Lang:core:core:uzbekistan}',
		'VU'=>'{Call:Lang:core:core:vanuatu}',
		'VA'=>'{Call:Lang:core:core:vatikan}',
		'VE'=>'{Call:Lang:core:core:venesuehlla}',
		'VN'=>'{Call:Lang:core:core:vetnam}',
		'VG'=>'{Call:Lang:core:core:virdzhinskie}',
		'VI'=>'{Call:Lang:core:core:virdzhinskie1}',
		'WF'=>'{Call:Lang:core:core:ostrovavalli}',
		'EH'=>'{Call:Lang:core:core:zapadnaiasak}',
		'YE'=>'{Call:Lang:core:core:jemen}',
		'YU'=>'{Call:Lang:core:core:iugoslaviia}',
		'ZR'=>'{Call:Lang:core:core:zair}',
		'ZM'=>'{Call:Lang:core:core:zambiia}',
		'ZW'=>'{Call:Lang:core:core:zimbabve}'
	);

	public static function getCountries($sort = 2){
		/*
			Список стран по кодам
			$sort	0 - нет
					1 - по имени
					2 - по имени вперед РФ
		*/

		switch($sort){
			case 0: return self::$countries;

			case 1:
				$return = self::$countries;
				asort($return);
				return $return;

			case 2:
				$return = self::$countries;
				asort($return);
				return Library::array_merge(array('RU' => $return['RU']), $return);
		}
	}

	public static function getCountry($country){
		/*
			Выдает имя страны по коду
		*/

		return self::$countries[regExp::upper($country)];
	}
}

?>