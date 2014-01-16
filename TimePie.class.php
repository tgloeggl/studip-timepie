<?php
/**
 * TimePie.class.php
 *
 * ...
 *
 * @author  Till Glöggler <tgloeggl@uos.de>
 * @version 1.0
 */

class TimePie extends StudIPPlugin implements PortalPlugin {

    public function __construct() {
        parent::__construct();

        $navigation = new AutoNavigation(_('TimePie'));
        $navigation->setURL(PluginEngine::GetURL($this, array(), 'show'));
        $navigation->setImage(Assets::image_path('blank.gif'));
        Navigation::addItem('/timepie', $navigation);
    }

   public function getPortalTemplate() {
        $timeline[strtotime('08.12.2013')] = 'bis %s<br>neue StEPs';
        $timeline[strtotime('22.12.2013')] = 'bis %s<br>StEP-Votings';
        $timeline[strtotime('05.01.2014')] = 'bis %s<br>Einbau und Test StEPs und TICs';
        $timeline[strtotime('26.01.2014')] = 'bis %s<br>Review';
        $timeline[strtotime('06.02.2014')] = 'bis %s<br>Nachbesserung und Ausbau, i18n';
        $timeline[strtotime('07.02.2014')] = 'am %s<br>Ausbranchen';
        $timeline[strtotime('17.02.2014')] = 'ab %s<br>Update Beta-Test-Installationen';
        $timeline[strtotime('31.03.2014')] = 'ab %s<br>Release packen';

        $templateFactory = new Flexi_TemplateFactory(dirname(__FILE__) . '/templates');
        $template = $templateFactory->open('portal');
        $template->set_attributes(array(
            'title'    => 'Zeitplan Stud.IP-Release',
            'timeline' => $timeline
        ));

        return $template;
    }

    public function getModuleTitle($module_id, $semester_id = null) {
    }

    public function getModuleDescription($module_id, $semester_id = null) {
    }

    public function getModuleInfoNavigation($module_id, $semester_id = null) {
    }
}
