<?
	switch($_REQUEST['a']) {
		default:		DisplayDemoPage();
	}
	exit();
function DisplayDemoPage() {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <link rel="SHORTCUT ICON" HREF="images/favicon.gif" type="image/ico">
  <title>MooTools InlineSuggest Demo</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="css/public.css" media="screen" rel="Stylesheet" type="text/css" />
  
  <script type="text/javascript" src="scripts/mootools-core-1.4.2.js"></script>
  <script type="text/javascript" src="scripts/mootools-more-1.4.0.1.js"></script>
  <script type="text/javascript" src="scripts/InlineSuggest.js"></script>
</head>
<body>
 <div class="centered" style="width: 600px;">
  <h2>InlineSuggest Demo</h2>
  <p style="width: 450px; margin: 0 auto 20px auto;">
    Functionality to add inline suggestions to a text input or textarea.
  </p>
  <p>Type in the top input to see inline suggestions be made.</p>
  <p>When there are multiple suggestions which fit what you are typing, hit the up and down arrows to traverse through them.<br />
  </p>
  <div style="text-align: left;">
    <code>var suggestionSet = $('theSuggestions').value.split('\n');<br />
      new InlineSuggest('theTextarea', suggestionSet, { minLengthMatch: 2 });</code>
  </div>
  <br />
  <br />
  <textarea id="theTextarea" style="width: 100%; height: 100px;">Type in here to see suggestions appear.</textarea><br />
  <br />
  <br />
  Suggest terms:<br />
  <textarea id="theSuggestions" onchange="JavaScript: updateSuggestions(this);" style="width: 100%; height: 200px;">Afghanistan
Albania
Algeria
Andorra
Angola
Antigua and Barbuda
Argentina
Armenia
Australia
Austria
Azerbaijan
Bahamas, The
Bahrain
Bangladesh
Barbados
Belarus
Belgium
Belize
Benin
Bhutan
Bolivia
Bosnia and Herzegovina
Botswana
Brazil
Brunei 
Bulgaria
Burkina Faso
Burma
Burundi
Cambodia
Cameroon
Canada
Cape Verde
Central African Republic
Chad
Chile
China
Colombia
Comoros 
Congo, Democratic Republic of the
Congo, Republic of the 
Costa Rica
Cote d'Ivoire
Croatia
Cuba
Cyprus
Czech Republic
Denmark
Djibouti
Dominica
Dominican Republic
East Timor (see Timor-Leste)
Ecuador
Egypt
El Salvador
Equatorial Guinea
Eritrea
Estonia
Ethiopia
Fiji
Finland
France
Gabon
Gambia, The
Georgia
Germany
Ghana
Greece
Grenada
Guatemala
Guinea
Guinea-Bissau
Guyana
Haiti
Holy See
Honduras
Hong Kong
Hungary
Iceland
India
Indonesia
Iran
Iraq
Ireland
Israel
Italy
Jamaica
Japan
Jordan
Kazakhstan
Kenya
Kiribati
Korea, North
Korea, South
Kosovo
Kuwait
Kyrgyzstan
Laos
Latvia
Lebanon
Lesotho
Liberia
Libya
Liechtenstein
Lithuania
Luxembourg
Macau
Macedonia
Madagascar
Malawi
Malaysia
Maldives
Mali
Malta
Marshall Islands
Mauritania
Mauritius
Mexico
Micronesia
Moldova
Monaco
Mongolia
Montenegro
Morocco
Mozambique
Namibia
Nauru
Nepal
Netherlands
Netherlands Antilles
New Zealand
Nicaragua
Niger
Nigeria
North Korea
Norway
Oman
Pakistan
Palau
Palestinian Territories
Panama
Papua New Guinea
Paraguay
Peru
Philippines
Poland
Portugal
Qatar
Romania
Russia
Rwanda
Saint Kitts and Nevis
Saint Lucia
Saint Vincent and the Grenadines
Samoa
San Marino
Sao Tome and Principe
Saudi Arabia
Senegal
Serbia
Seychelles
Sierra Leone
Singapore
Slovakia
Slovenia
Solomon Islands
Somalia
South Africa
South Korea
South Sudan
Spain
Sri Lanka
Sudan
Suriname
Swaziland
Sweden
Switzerland
Syria
Taiwan
Tajikistan
Tanzania
Thailand
Timor-Leste
Togo
Tonga
Trinidad and Tobago
Tunisia
Turkey
Turkmenistan
Tuvalu
Uganda
Ukraine
United Arab Emirates
United Kingdom
United States of America
Uruguay
Uzbekistan
Vanuatu
Venezuela
Vietnam
Yemen
Zambia
Zimbabwe</textarea><br />
<i>Feel free to edit the terms in the textarea above.  One item per line, the InlineSuggest will update itself accordingly.</i>
 </div>
  
<script type="text/javascript">
	App = {};
	window.addEvent('domready', function() {
		App.suggester = new InlineSuggest('theTextarea', $('theSuggestions').value.split('\n'), { minLengthMatch: 2 });
	});
	function updateSuggestions(theTextarea) {
		App.suggester.setSuggestions(theTextarea.value.split('\n'));
	}
</script>
</body>
</html>
<?
}
?>