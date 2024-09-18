<?php
/* ======================================================
 # Editable Article Hits - Joomla! System Plugin
 # -------------------------------------------------------
 # For Joomla! CMS (4.x and 5.x)
 # Author: Web357 (Yiannis Christodoulou)
 # Copyright (©) 2014-2024 Web357. All rights reserved.
 # License: GNU/GPLv3, http://www.gnu.org/licenses/gpl-3.0.html
 # Website: https:/www.web357.com
 # Support: support@web357.com
 ========================================================= */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Form\Form;
use Joomla\CMS\Factory;
use Joomla\Utilities\ArrayHelper;

class PlgSystemEditableArticleHits extends CMSPlugin
{
    protected $app;

    public function onContentPrepareForm(Form $form, $data)
    {
        // Get excluded user groups from plugin params
        $excludedUserGroups = $this->params->get('excluded_usergroups', []);

        // Get the current user
        $user = Factory::getUser();

        // If the current user is in an excluded group, return without making hits editable
        if (!empty($excludedUserGroups) && array_intersect($excludedUserGroups, $user->getAuthorisedGroups())) {
            return true; // User is in an excluded group, don't allow editing
        }

        // Get excluded categories from plugin params
        $excludedCategories = $this->params->get('excluded_categories', []);

        // Check if the article belongs to an excluded category
        if (!empty($data)) {
            $articleId = is_object($data) && isset($data->id) ? (int) $data->id : 0;
            if ($articleId) {
                // Get the article's category ID
                $db = Factory::getDbo();
                $query = $db->getQuery(true)
                    ->select('catid')
                    ->from($db->quoteName('#__content'))
                    ->where($db->quoteName('id') . ' = ' . (int) $articleId);
                $db->setQuery($query);
                $categoryId = (int) $db->loadResult();

                // If the article's category is in the excluded categories, return without making hits editable
                if (!empty($excludedCategories) && in_array($categoryId, $excludedCategories)) {
                    return true; // Category is excluded, don't allow editing
                }
            }
        }

        // If the user and category are not excluded, make the hits field editable
        $form->setFieldAttribute('hits', 'readonly', 'false');
        $form->setFieldAttribute('hits', 'filter', 'raw');

        return true;
    }
}
