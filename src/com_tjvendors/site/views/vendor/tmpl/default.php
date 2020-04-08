<?php
/**
 * @package     TJVendors
 * @subpackage  com_tjvendors
 *
 * @author      Techjoomla <extensions@techjoomla.com>
 * @copyright   Copyright (C) 2009 - 2019 Techjoomla. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access
defined('_JEXEC') or die();
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;

if (!empty($this->vendor_id))
{
?>
	<h1><?php echo Text::_('COM_TJVENDOR_VENDOR_PROFILE');?></h1>
	<input type="hidden" name="client" value="<?php echo $this->input->get('client', '', 'STRING'); ?>" />
	<div class="profile row <?php echo COM_TJVENDORS_WRAPPAER_CLASS;?>" id="tjv-wrapper">
		<div class="col-sm-12">
			<h3 class="mt-0">
				<?php echo htmlspecialchars($this->VendorDetail->vendor_title, ENT_COMPAT, 'UTF-8');?>
				<span class="pull-right">
					<small>
						<a  
						href="<?php echo Route::_(
						'index.php?option=com_tjvendors&view=vendor&&layout=profile&client=' . $this->input->get('client', '', 'STRING') .
						'&vendor_id=' . $this->vendor_id
						);?>">
						<i class="fa fa-wrench" aria-hidden="true"></i>  <?php echo Text::_("COM_TJVENDORS_VENDOR_UPDATE"); ?></a>
					</small>
				</span>
			</h3>
		</div>
		<?php
		$profileImage = Uri::root() . "/administrator/components/com_tjvendors/assets/images/default.png";

		if (!empty($this->VendorDetail->vendor_logo))
		{
			$profileImage = Uri::root() . $this->VendorDetail->vendor_logo;
		}
		?>
		<div class="controls col-sm-3 center">
			<img src="<?php echo $profileImage; ?>" width="100%">
		</div>
		<div class="col-sm-9">
			<div>
				<div class='profile__content text-muted'>
				<?php echo $this->escape($this->VendorDetail->vendor_description);?>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3"><?php echo Text::_('COM_TJVENDORS_VENDOR_ADDRESS')?></div>
		<div class="col-sm-6">
			<?php
				echo $this->escape($this->VendorDetail->address);
				echo ', ' . $this->escape($this->VendorDetail->country_name);
				echo ', ' . $this->escape($this->VendorDetail->region_name);
				echo ', ' . $this->escape($this->VendorDetail->city_name);
			?>
		</div>
				
		<div class="col-sm-3"><?php echo Text::_('COM_TJVENDORS_VENDOR_ZIP')?></div>
		<div class="col-sm-6">
			<?php echo htmlspecialchars($this->VendorDetail->zip, ENT_COMPAT, 'UTF-8')?>
		</div>
		<?php 
		if (!empty($this->VendorDetail->phone_number))
		{
		?>
			<div class="col-sm-3"><?php echo Text::_('COM_TJVENDORS_VENDOR_PHONE_NUMBER')?></div>
			<div class="col-sm-6">
				<?php echo htmlspecialchars($this->VendorDetail->phone_number, ENT_COMPAT, 'UTF-8')?>
			</div>
		<?php 
		}

		if (!empty($this->VendorDetail->website_address))
		{
		?>
			<div class="col-sm-3"><?php echo Text::_('COM_TJVENDORS_VENDOR_WEBSITE_ADDRESS')?></div>
			<div class="col-sm-6">
				<?php echo htmlspecialchars($this->VendorDetail->website_address, ENT_COMPAT, 'UTF-8')?>
			</div>
		<?php 
		}

		if (!empty($this->VendorDetail->vat_number))
		{
		?>
			<div class="col-sm-3"><?php echo Text::_('COM_TJVENDORS_VENDOR_VAT_NUMBER')?></div>
			<div class="col-sm-6">
				<?php echo htmlspecialchars($this->VendorDetail->vat_number, ENT_COMPAT, 'UTF-8')?>
			</div>
		<?php
		}?>	
	</div>
<?php
}
elseif (Factory::getUser()->id && !$this->vendor_id)
{
	$app = Factory::getApplication();
	$client = $app->input->get('client', '', 'STRING');
	$link = Route::_('index.php?option=com_tjvendors&view=vendor&layout=edit&client=' . $client);
	$app->enqueueMessage(Text::_('COM_TJVENDOR_REGISTRATION_VENDOR_ERROR'), 'warning');
	$app->redirect($link);
}
else
{
	$link = Route::_('index.php?option=com_users');
	$app = Factory::getApplication();
	$app->redirect($link);
}
?>
<script>
	tjVAdmin.vendor.readMore();
</script>
