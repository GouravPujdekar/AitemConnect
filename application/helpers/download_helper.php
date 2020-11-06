<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package  CodeIgniter
 * @author  ExpressionEngine Dev Team
 * @copyright Copyright (c) 2008 - 2010, EllisLab, Inc.
 * @license  <a href="http://ellislab.com/codeigniter/user-guide/license.html">http://ellislab.com/codeigniter/user-guide/license.html</a>
 * @link  <a href="http://codeigniter.com">http://codeigniter.com</a>
 * @since  Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Download Helpers
 *
 * @package  CodeIgniter
 * @subpackage Helpers
 * @category Helpers
 * @author  ExpressionEngine Dev Team
 * @link  <a href="http://ellislab.com/codeigniter/user-guide/helpers/download_helper.html">http://ellislab.com/codeigniter/user-guide/helpers/download_helper.html</a>
 */

// ------------------------------------------------------------------------

/**
 * Force Download
 *
 * Generates headers that force a download to happen
 *
 * @access public
 * @param string filename
 * @param mixed the data to be downloaded
 * @return void
 */ 
if ( ! function_exists('force_download'))
{
 function force_download($filename = '', $data = '')
 {
  if ($filename == '' OR $data == '')
  {
   return FALSE;
  }

  // Try to determine if the filename includes a file extension.
  // We need it in order to set the MIME type
  if (FALSE === strpos($filename, '.'))
  {
   return FALSE;
  }
 
  // Grab the file extension
  $x = explode('.', $filename);
  $extension = end($x);

  // Load the mime types
  @include(APPPATH.'config/mimes'.EXT);
 
  // Set a default mime if we can't find it
  if ( ! isset($mimes[$extension]))
  {
   $mime = 'application/octet-stream';
  }
  else
  {
   $mime = (is_array($mimes[$extension])) ? $mimes[$extension][0] : $mimes[$extension];
  }
 
  // Generate the server headers
  if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))
  {
   header('Content-Type: "'.$mime.'"');
   header('Content-Disposition: attachment; filename="'.$filename.'"');
   header('Expires: 0');
   header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
   header("Content-Transfer-Encoding: binary");
   header('Pragma: public');
   header("Content-Length: ".strlen($data));
  }
  else
  {
   header('Content-Type: "'.$mime.'"');
   header('Content-Disposition: attachment; filename="'.$filename.'"');
   header("Content-Transfer-Encoding: binary");
   header('Expires: 0');
   header('Pragma: no-cache');
   header("Content-Length: ".strlen($data));
  }
 
  exit($data);
 }
}