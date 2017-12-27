<?php
/**
 * Created by PhpStorm.
 * User: yus
 * Date: 27/12/17
 * Time: 21:58
 */

namespace AppBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use \DateTime;

class AppExtension extends  AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('dateFormat', array($this, 'stringDate')),
        );
    }

    public function stringDate()
    {
        $date =  new DateTime();
        $mont = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
        $days = array('domingo','lunes','martes','miércoles','jueves','viernes','sábado');

        $date = $days[(int)$date->format('w')].', '.$date->format('j').' de '.$mont[(int)$date->format('m')-1].' de '.$date->format('Y');

        return $date;
    }
}