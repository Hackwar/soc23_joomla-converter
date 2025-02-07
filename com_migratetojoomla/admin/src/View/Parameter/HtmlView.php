<?php

namespace Joomla\Component\MigrateToJoomla\Administrator\View\Parameter;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\Toolbar;
use Joomla\CMS\Toolbar\ToolbarHelper;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_migratetojoomla
 *
 * @copyright     (C) 2024 Open Source Matters, Inc. <https://www.joomla.org>
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Migrate "Migrate To Joomla" Parameter View
 */
class HtmlView extends BaseHtmlView
{
    /**
     * The Form object
     *
     * @var  \Joomla\CMS\Form\Form
     */
    protected $form;

    /**
     * Display the Migrate "Migrate To Joomla" view
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
     * @return  void
     * 
     * @since  1.0
     */
    public function display($tpl = null)
    {
        /** @var ParameterModel $model */
        $model       = $this->getModel();
        $this->form  = $model->getForm();

        if (!$this->form) {
            Factory::getApplication()->enqueueMessage('This is a warning message', 'warning');
        }
        // Set ToolBar title
        ToolbarHelper::title(Text::_('COM_MIGRATETOJOOMLA'), 'Migrate To Joomla');

        $this->addToolbar();
        parent::display($tpl);
    }

    /**
     * Setup the Toolbar
     *
     * @return  void
     *
     * @since   1.6
     */
    protected function addToolbar(): void
    {
        $toolbar = Toolbar::getInstance();
        $toolbar->customButton('previous')
            ->html('<joomla-toolbar-button><button onclick="Joomla.submitbutton(\'parameter.storeFormAndPrevious\')" '
                . 'class="btn btn-primary"><span class="icon-previous" aria-hidden="true"></span>'
                . Text::_('COM_MIGRATETOJOOMLA_PREVIOUS') . '</button></joomla-toolbar-button>');
        $toolbar->customButton('next')
            ->html('<joomla-toolbar-button><button onclick="Joomla.submitbutton(\'parameter.storeFormAndNext\')" '
                . 'class="btn btn-primary"><span class="icon-next" aria-hidden="true"></span>'
                . Text::_('COM_MIGRATETOJOOMLA_NEXT') . '</button></joomla-toolbar-button>');
    }
}
