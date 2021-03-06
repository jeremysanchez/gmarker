<?php
/**
 * Gmarker
 *
 * Copyright 2012 by Everett Griffiths <everett@craftsmancoding.com>
 *
 * This file is part of Gmarker,  component for MODx Revolution.
 *
 * Gmarker is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Gmarker is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Gmarker; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package gmarker
 */
/**
 * Gmarker English language file
 *
 * @package gmarker
 * @subpackage lexicon
 */
$_lang['gmarker'] = 'Gmarker';
$_lang['gmarker_desc'] = 'Implementation of the Google Geocoding API (v3)';

// Errors
$_lang['node_not_found'] = 'The following node was not found in the JSON: [[+node]]';
$_lang['missing_params'] = 'Missing required parameters.';
$_lang['bad_dimensions'] = 'Map has bad dimensions!  Height and width must be non-zero.';
$_lang['missing_center'] = 'Map center must be defined via &address or &latlng';
$_lang['hook_error'] = 'Hook needs gmaps.lat_tv and gmaps.lng_tv set.';
$_lang['problem_saving'] = 'There was a problem saving the latitude/longitude TVs on page id [[+id]]';
$_lang['invalid_resource'] = 'Resource id [[+id]] is missing required latitude/longitude TVs.';
$_lang['tv_not_found'] = 'TV [[+tv]] not found.';
$_lang['utf8_error'] = 'String for page id [[+id]] "[[+var]]" is not UTF-8 encoded.';


// System Settings
$_lang['setting_gmarker.formatting_string'] = 'Formatting String';
$_lang['setting_gmarker.formatting_string_desc'] = 'Assemble all the Template Variables so that when they are parsed they will contain a valid address that you could conceivably type into a Google Maps search field.';

$_lang['setting_gmarker.templates'] = 'Templates to Geocode';
$_lang['setting_gmarker.templates_desc'] = 'Enter a comma-separated list of template IDs. Pages using these templates should contain address information.  When saving pages of this type, Geocoding lookups will be performed and used to auto-populate dedicated latitude and longitude TVs (see gmaps.lat_tv and gmaps.lng_tv)';

$_lang['setting_gmarker.components'] = 'Geocoding Components';
$_lang['setting_gmarker.components_desc'] = 'Optionally, you can restrict address results to a certain area, e.g. "country:NZL". See https://developers.google.com/maps/documentation/geocoding/#ComponentFiltering for more info.';

$_lang['setting_gmarker.bounds'] = 'Geocoding Bounds';
$_lang['setting_gmarker.bounds_desc'] = 'The optional lat|lng bounding box of the viewport within which to bias geocode results more prominently, e.g. "34.172684,-118.604794|34.236144,-118.500938". This parameter will only influence, not fully restrict, results from the geocoder. See https://developers.google.com/maps/documentation/geocoding/#Viewports for more info.';

$_lang['setting_gmarker.lat_tv'] = 'Latitude TV';
$_lang['setting_gmarker.lat_tv_desc'] = 'The name of the Template Variable where latitude information will be automatically stored.  All templates listed in the gmaps.templates Setting should have this TV assigned to them.';

$_lang['setting_gmarker.lng_tv'] = 'Longitude TV';
$_lang['setting_gmarker.lng_tv_desc'] = 'The name of the Template Variable where longitude information will be automatically stored. All templates listed in the gmaps.templates Setting should have this TV assigned to them.';

$_lang['setting_gmarker.secure'] = 'Geocoding Secure';
$_lang['setting_gmarker.secure_desc'] = "This controls the protocol used when accessing the Google Geocoding API.  No = HTTP, Yes = HTTPS. HTTPS is recommended for applications that include sensitive user data, such as a user's location, in requests.";

$_lang['setting_gmarker.apikey'] = 'Google Maps API Key';
$_lang['setting_gmarker.apikey_desc'] = 'Log into https://code.google.com/apis/console using your Google account, activate the Google Maps API v3 and the Static Maps API, then click on the API Access and copy your key here.  See https://developers.google.com/maps/documentation/javascript/tutorial#api_key for more info.';

$_lang['setting_gmarker.default_height'] = 'Default Height';
$_lang['setting_gmarker.default_height_desc'] = 'The default height (in pixels) for maps drawn using the Gmap or Gmarker Snippets';

$_lang['setting_gmarker.default_width'] = 'Width';
$_lang['setting_gmarker.default_width_desc'] = 'The default width (in pixels) for maps drawn using the Gmap or Gmarker Snippets';

$_lang['setting_gmarker.language'] = 'Language';
$_lang['setting_gmarker.language_desc'] = 'The language in which to return results.  See https://developers.google.com/maps/faq#languagesupport for the latest list of languages.';

$_lang['setting_gmarker.region'] = 'Region';
$_lang['setting_gmarker.region_desc'] = 'The region code, specified as a ccTLD ("top-level domain") two-character value. This parameter will only influence, not fully restrict, results from the geocoder. See https://developers.google.com/maps/documentation/geocoding/#RegionCodes for more info.';

$_lang['setting_gmarker.pincolor'] = 'Default Pin Color';
$_lang['setting_gmarker.pincolor_desc'] = 'Set a valid CSS color, e.g. FE7569 (do not include the #), to set the default color of your pins.  Used by the Gmarker Snippet.';


/*EOF*/