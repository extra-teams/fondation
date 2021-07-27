<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->truncate();

        $countries = [
            ['nom' => 'Afghanistan', 'code' => 'AF'],
            ['nom' => 'Åland Islands', 'code' => 'AX'],
            ['nom' => 'Albania', 'code' => 'AL'],
            ['nom' => 'Algeria', 'code' => 'DZ'],
            ['nom' => 'American Samoa', 'code' => 'AS'],
            ['nom' => 'Andorra', 'code' => 'AD'],
            ['nom' => 'Angola', 'code' => 'AO'],
            ['nom' => 'Anguilla', 'code' => 'AI'],
            ['nom' => 'Antarctica', 'code' => 'AQ'],
            ['nom' => 'Antigua and Barbuda', 'code' => 'AG'],
            ['nom' => 'Argentina', 'code' => 'AR'],
            ['nom' => 'Armenia', 'code' => 'AM'],
            ['nom' => 'Aruba', 'code' => 'AW'],
            ['nom' => 'Australia', 'code' => 'AU'],
            ['nom' => 'Austria', 'code' => 'AT'],
            ['nom' => 'Azerbaijan', 'code' => 'AZ'],
            ['nom' => 'Bahamas', 'code' => 'BS'],
            ['nom' => 'Bahrain', 'code' => 'BH'],
            ['nom' => 'Bangladesh', 'code' => 'BD'],
            ['nom' => 'Barbados', 'code' => 'BB'],
            ['nom' => 'Belarus', 'code' => 'BY'],
            ['nom' => 'Belgium', 'code' => 'BE'],
            ['nom' => 'Belize', 'code' => 'BZ'],
            ['nom' => 'Benin', 'code' => 'BJ'],
            ['nom' => 'Bermuda', 'code' => 'BM'],
            ['nom' => 'Bhutan', 'code' => 'BT'],
            ['nom' => 'Bolivia, Plurinational State of', 'code' => 'BO'],
            ['nom' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BQ'],
            ['nom' => 'Bosnia and Herzegovina', 'code' => 'BA'],
            ['nom' => 'Botswana', 'code' => 'BW'],
            ['nom' => 'Bouvet Island', 'code' => 'BV'],
            ['nom' => 'Brazil', 'code' => 'BR'],
            ['nom' => 'British Indian Ocean Territory', 'code' => 'IO'],
            ['nom' => 'Brunei Darussalam', 'code' => 'BN'],
            ['nom' => 'Bulgaria', 'code' => 'BG'],
            ['nom' => 'Burkina Faso', 'code' => 'BF'],
            ['nom' => 'Burundi', 'code' => 'BI'],
            ['nom' => 'Cambodia', 'code' => 'KH'],
            ['nom' => 'Cameroon', 'code' => 'CM'],
            ['nom' => 'Canada', 'code' => 'CA'],
            ['nom' => 'Cape Verde', 'code' => 'CV'],
            ['nom' => 'Cayman Islands', 'code' => 'KY'],
            ['nom' => 'Central African Republic', 'code' => 'CF'],
            ['nom' => 'Chad', 'code' => 'TD'],
            ['nom' => 'Chile', 'code' => 'CL'],
            ['nom' => 'China', 'code' => 'CN'],
            ['nom' => 'Christmas Island', 'code' => 'CX'],
            ['nom' => 'Cocos (Keeling) Islands', 'code' => 'CC'],
            ['nom' => 'Colombia', 'code' => 'CO'],
            ['nom' => 'Comoros', 'code' => 'KM'],
            ['nom' => 'Congo', 'code' => 'CG'],
            ['nom' => 'Congo, the Democratic Republic of the', 'code' => 'CD'],
            ['nom' => 'Cook Islands', 'code' => 'CK'],
            ['nom' => 'Costa Rica', 'code' => 'CR'],
            ['nom' => 'Côte d\'Ivoire', 'code' => 'CI'],
            ['nom' => 'Croatia', 'code' => 'HR'],
            ['nom' => 'Cuba', 'code' => 'CU'],
            ['nom' => 'Curaçao', 'code' => 'CW'],
            ['nom' => 'Cyprus', 'code' => 'CY'],
            ['nom' => 'Czech Republic', 'code' => 'CZ'],
            ['nom' => 'Denmark', 'code' => 'DK'],
            ['nom' => 'Djibouti', 'code' => 'DJ'],
            ['nom' => 'Dominica', 'code' => 'DM'],
            ['nom' => 'Dominican Republic', 'code' => 'DO'],
            ['nom' => 'Ecuador', 'code' => 'EC'],
            ['nom' => 'Egypt', 'code' => 'EG'],
            ['nom' => 'El Salvador', 'code' => 'SV'],
            ['nom' => 'Equatorial Guinea', 'code' => 'GQ'],
            ['nom' => 'Eritrea', 'code' => 'ER'],
            ['nom' => 'Estonia', 'code' => 'EE'],
            ['nom' => 'Ethiopia', 'code' => 'ET'],
            ['nom' => 'Falkland Islands (Malvinas)', 'code' => 'FK'],
            ['nom' => 'Faroe Islands', 'code' => 'FO'],
            ['nom' => 'Fiji', 'code' => 'FJ'],
            ['nom' => 'Finland', 'code' => 'FI'],
            ['nom' => 'France', 'code' => 'FR'],
            ['nom' => 'French Guiana', 'code' => 'GF'],
            ['nom' => 'French Polynesia', 'code' => 'PF'],
            ['nom' => 'French Southern Territories', 'code' => 'TF'],
            ['nom' => 'Gabon', 'code' => 'GA'],
            ['nom' => 'Gambia', 'code' => 'GM'],
            ['nom' => 'Georgia', 'code' => 'GE'],
            ['nom' => 'Germany', 'code' => 'DE'],
            ['nom' => 'Ghana', 'code' => 'GH'],
            ['nom' => 'Gibraltar', 'code' => 'GI'],
            ['nom' => 'Greece', 'code' => 'GR'],
            ['nom' => 'Greenland', 'code' => 'GL'],
            ['nom' => 'Grenada', 'code' => 'GD'],
            ['nom' => 'Guadeloupe', 'code' => 'GP'],
            ['nom' => 'Guam', 'code' => 'GU'],
            ['nom' => 'Guatemala', 'code' => 'GT'],
            ['nom' => 'Guernsey', 'code' => 'GG'],
            ['nom' => 'Guinea', 'code' => 'GN'],
            ['nom' => 'Guinea-Bissau', 'code' => 'GW'],
            ['nom' => 'Guyana', 'code' => 'GY'],
            ['nom' => 'Haiti', 'code' => 'HT'],
            ['nom' => 'Heard Island and McDonald Mcdonald Islands', 'code' => 'HM'],
            ['nom' => 'Holy See (Vatican City State)', 'code' => 'VA'],
            ['nom' => 'Honduras', 'code' => 'HN'],
            ['nom' => 'Hong Kong', 'code' => 'HK'],
            ['nom' => 'Hungary', 'code' => 'HU'],
            ['nom' => 'Iceland', 'code' => 'IS'],
            ['nom' => 'India', 'code' => 'IN'],
            ['nom' => 'Indonesia', 'code' => 'ID'],
            ['nom' => 'Iran, Islamic Republic of', 'code' => 'IR'],
            ['nom' => 'Iraq', 'code' => 'IQ'],
            ['nom' => 'Ireland', 'code' => 'IE'],
            ['nom' => 'Isle of Man', 'code' => 'IM'],
            ['nom' => 'Israel', 'code' => 'IL'],
            ['nom' => 'Italy', 'code' => 'IT'],
            ['nom' => 'Jamaica', 'code' => 'JM'],
            ['nom' => 'Japan', 'code' => 'JP'],
            ['nom' => 'Jersey', 'code' => 'JE'],
            ['nom' => 'Jordan', 'code' => 'JO'],
            ['nom' => 'Kazakhstan', 'code' => 'KZ'],
            ['nom' => 'Kenya', 'code' => 'KE'],
            ['nom' => 'Kiribati', 'code' => 'KI'],
            ['nom' => 'Korea, Democratic People\'s Republic of', 'code' => 'KP'],
            ['nom' => 'Korea, Republic of', 'code' => 'KR'],
            ['nom' => 'Kuwait', 'code' => 'KW'],
            ['nom' => 'Kyrgyzstan', 'code' => 'KG'],
            ['nom' => 'Lao People\'s Democratic Republic', 'code' => 'LA'],
            ['nom' => 'Latvia', 'code' => 'LV'],
            ['nom' => 'Lebanon', 'code' => 'LB'],
            ['nom' => 'Lesotho', 'code' => 'LS'],
            ['nom' => 'Liberia', 'code' => 'LR'],
            ['nom' => 'Libya', 'code' => 'LY'],
            ['nom' => 'Liechtenstein', 'code' => 'LI'],
            ['nom' => 'Lithuania', 'code' => 'LT'],
            ['nom' => 'Luxembourg', 'code' => 'LU'],
            ['nom' => 'Macao', 'code' => 'MO'],
            ['nom' => 'Macedonia, the Former Yugoslav Republic of', 'code' => 'MK'],
            ['nom' => 'Madagascar', 'code' => 'MG'],
            ['nom' => 'Malawi', 'code' => 'MW'],
            ['nom' => 'Malaysia', 'code' => 'MY'],
            ['nom' => 'Maldives', 'code' => 'MV'],
            ['nom' => 'Mali', 'code' => 'ML'],
            ['nom' => 'Malta', 'code' => 'MT'],
            ['nom' => 'Marshall Islands', 'code' => 'MH'],
            ['nom' => 'Martinique', 'code' => 'MQ'],
            ['nom' => 'Mauritania', 'code' => 'MR'],
            ['nom' => 'Mauritius', 'code' => 'MU'],
            ['nom' => 'Mayotte', 'code' => 'YT'],
            ['nom' => 'Mexico', 'code' => 'MX'],
            ['nom' => 'Micronesia, Federated States of', 'code' => 'FM'],
            ['nom' => 'Moldova, Republic of', 'code' => 'MD'],
            ['nom' => 'Monaco', 'code' => 'MC'],
            ['nom' => 'Mongolia', 'code' => 'MN'],
            ['nom' => 'Montenegro', 'code' => 'ME'],
            ['nom' => 'Montserrat', 'code' => 'MS'],
            ['nom' => 'Morocco', 'code' => 'MA'],
            ['nom' => 'Mozambique', 'code' => 'MZ'],
            ['nom' => 'Myanmar', 'code' => 'MM'],
            ['nom' => 'Namibia', 'code' => 'NA'],
            ['nom' => 'Nauru', 'code' => 'NR'],
            ['nom' => 'Nepal', 'code' => 'NP'],
            ['nom' => 'Netherlands', 'code' => 'NL'],
            ['nom' => 'New Caledonia', 'code' => 'NC'],
            ['nom' => 'New Zealand', 'code' => 'NZ'],
            ['nom' => 'Nicaragua', 'code' => 'NI'],
            ['nom' => 'Niger', 'code' => 'NE'],
            ['nom' => 'Nigeria', 'code' => 'NG'],
            ['nom' => 'Niue', 'code' => 'NU'],
            ['nom' => 'Norfolk Island', 'code' => 'NF'],
            ['nom' => 'Northern Mariana Islands', 'code' => 'MP'],
            ['nom' => 'Norway', 'code' => 'NO'],
            ['nom' => 'Oman', 'code' => 'OM'],
            ['nom' => 'Pakistan', 'code' => 'PK'],
            ['nom' => 'Palau', 'code' => 'PW'],
            ['nom' => 'Palestine, State of', 'code' => 'PS'],
            ['nom' => 'Panama', 'code' => 'PA'],
            ['nom' => 'Papua New Guinea', 'code' => 'PG'],
            ['nom' => 'Paraguay', 'code' => 'PY'],
            ['nom' => 'Peru', 'code' => 'PE'],
            ['nom' => 'Philippines', 'code' => 'PH'],
            ['nom' => 'Pitcairn', 'code' => 'PN'],
            ['nom' => 'Poland', 'code' => 'PL'],
            ['nom' => 'Portugal', 'code' => 'PT'],
            ['nom' => 'Puerto Rico', 'code' => 'PR'],
            ['nom' => 'Qatar', 'code' => 'QA'],
            ['nom' => 'Réunion', 'code' => 'RE'],
            ['nom' => 'Romania', 'code' => 'RO'],
            ['nom' => 'Russian Federation', 'code' => 'RU'],
            ['nom' => 'Rwanda', 'code' => 'RW'],
            ['nom' => 'Saint Barthélemy', 'code' => 'BL'],
            ['nom' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SH'],
            ['nom' => 'Saint Kitts and Nevis', 'code' => 'KN'],
            ['nom' => 'Saint Lucia', 'code' => 'LC'],
            ['nom' => 'Saint Martin (French part)', 'code' => 'MF'],
            ['nom' => 'Saint Pierre and Miquelon', 'code' => 'PM'],
            ['nom' => 'Saint Vincent and the Grenadines', 'code' => 'VC'],
            ['nom' => 'Samoa', 'code' => 'WS'],
            ['nom' => 'San Marino', 'code' => 'SM'],
            ['nom' => 'Sao Tome and Principe', 'code' => 'ST'],
            ['nom' => 'Saudi Arabia', 'code' => 'SA'],
            ['nom' => 'Senegal', 'code' => 'SN'],
            ['nom' => 'Serbia', 'code' => 'RS'],
            ['nom' => 'Seychelles', 'code' => 'SC'],
            ['nom' => 'Sierra Leone', 'code' => 'SL'],
            ['nom' => 'Singapore', 'code' => 'SG'],
            ['nom' => 'Sint Maarten (Dutch part)', 'code' => 'SX'],
            ['nom' => 'Slovakia', 'code' => 'SK'],
            ['nom' => 'Slovenia', 'code' => 'SI'],
            ['nom' => 'Solomon Islands', 'code' => 'SB'],
            ['nom' => 'Somalia', 'code' => 'SO'],
            ['nom' => 'South Africa', 'code' => 'ZA'],
            ['nom' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS'],
            ['nom' => 'South Sudan', 'code' => 'SS'],
            ['nom' => 'Spain', 'code' => 'ES'],
            ['nom' => 'Sri Lanka', 'code' => 'LK'],
            ['nom' => 'Sudan', 'code' => 'SD'],
            ['nom' => 'Suriname', 'code' => 'SR'],
            ['nom' => 'Svalbard and Jan Mayen', 'code' => 'SJ'],
            ['nom' => 'Swaziland', 'code' => 'SZ'],
            ['nom' => 'Sweden', 'code' => 'SE'],
            ['nom' => 'Switzerland', 'code' => 'CH'],
            ['nom' => 'Syrian Arab Republic', 'code' => 'SY'],
            ['nom' => 'Taiwan', 'code' => 'TW'],
            ['nom' => 'Tajikistan', 'code' => 'TJ'],
            ['nom' => 'Tanzania, United Republic of', 'code' => 'TZ'],
            ['nom' => 'Thailand', 'code' => 'TH'],
            ['nom' => 'Timor-Leste', 'code' => 'TL'],
            ['nom' => 'Togo', 'code' => 'TG'],
            ['nom' => 'Tokelau', 'code' => 'TK'],
            ['nom' => 'Tonga', 'code' => 'TO'],
            ['nom' => 'Trinidad and Tobago', 'code' => 'TT'],
            ['nom' => 'Tunisia', 'code' => 'TN'],
            ['nom' => 'Turkey', 'code' => 'TR'],
            ['nom' => 'Turkmenistan', 'code' => 'TM'],
            ['nom' => 'Turks and Caicos Islands', 'code' => 'TC'],
            ['nom' => 'Tuvalu', 'code' => 'TV'],
            ['nom' => 'Uganda', 'code' => 'UG'],
            ['nom' => 'Ukraine', 'code' => 'UA'],
            ['nom' => 'United Arab Emirates', 'code' => 'AE'],
            ['nom' => 'United Kingdom', 'code' => 'GB'],
            ['nom' => 'United States', 'code' => 'US'],
            ['nom' => 'United States Minor Outlying Islands', 'code' => 'UM'],
            ['nom' => 'Uruguay', 'code' => 'UY'],
            ['nom' => 'Uzbekistan', 'code' => 'UZ'],
            ['nom' => 'Vanuatu', 'code' => 'VU'],
            ['nom' => 'Venezuela, Bolivarian Republic of', 'code' => 'VE'],
            ['nom' => 'Viet Nam', 'code' => 'VN'],
            ['nom' => 'Virgin Islands, British', 'code' => 'VG'],
            ['nom' => 'Virgin Islands, U.S.', 'code' => 'VI'],
            ['nom' => 'Wallis and Futuna', 'code' => 'WF'],
            ['nom' => 'Western Sahara', 'code' => 'EH'],
            ['nom' => 'Yemen', 'code' => 'YE'],
            ['nom' => 'Zambia', 'code' => 'ZM'],
            ['nom' => 'Zimbabwe', 'code' => 'ZW'],
        ];

        DB::table('pays')->insert($countries);
    }

}