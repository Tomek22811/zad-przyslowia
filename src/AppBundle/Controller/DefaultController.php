<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /*
     * A
     */
    /**
    * @Route("/czlek-zdechnie.html", name="czlek-zdechnie")
    */
    public function czlekZdechnieAction()
    {
        return $this->render('default/czlek-zdechnie.html.twig');
    }

    /*
     * B
     */
    /**
    * @Route("/bogatemu-to.html", name="bogatemu-to")
    */
    public function bogatemuToAction()
    {
        return $this->render('default/bogatemu-to.html.twig');
    }
    /*
     * C
     */

    /**
     * @Route("/D.html", name="D")
     */
    public function DAction()
    {
        return $this->render('default/D.html.twig');
    }

    /*
     * E
     */
    /**
 * @Route("/miedzy-powiedzeniem.html", name="mierzy-powiedzeniem")
 */
public function  MiedzyPowiedzeniemAction()
{
    return $this->render('default/miedzy-powiedzeniem.html.twig');
}
    
    
    /**
    * @Route("/bez-matki.html", name="bez matki")
    */
    public function bezmatkiAction()
    {
    return $this->render('default/bez-matki.html.twig');
    }
    
    
    /*
     * F
     */
    /**
 * @Route("/Aby-do-wiosny.html", name="Aby-do-wiosny")
 */
    public function AbydowiosnyAction()
{
    return $this->render('default/Aby-do-wiosny.html.twig');
}

    /*
     * G
     */

    /**
    * @Route("/stare-wino.html", name="stare-wino")
    */
    public function stareWinoAction()
    {
        return $this->render('default/stare-wino.html.twig');
    }

    /*
     * H
     */

    /**
    * @Route("/suchy-marzec.html", name="suchy-marzec")
    */
    public function suchyMarzecAction()
    {
        return $this->render('default/suchy-marzec.html.twig');
    }

    /*
     * I
     */
    
    /**
    * @Route("/im-dab-starszy.html", name="im-dab-starszy")
    */
    public function ImDabStarszyAction()
    {
    return $this->render('default/im-dab-starszy.html.twig');
    }   

    /*
     * J
     */

    /*
     * K
     */

    /*
     * L
     */

    /*
     * M
     */
    /**
    * @Route("/bujac-to.html", name="bujac-to")
    */
    public function bujacToAction()
    {
        return $this->render('default/bujac-to.html.twig');
    }
    /**
     * @Route("/dlatego-dwie-uszy.html", name="dlatego-dwie-uszy")
    */
     public function dlategodwieuszyAction()
    {
    return $this->render('default/dlatego-dwie-uszy.html.twig');
    }
    
    /*
     * N
     */

    /**
    * @Route("/gdzie-glowa-rzadzi.html", name="gdzie-glowa-rzadzi")
    */
   public function  gdzieGlowaRzadziAction()
   {
       return $this->render('default/gdzie-glowa-rzadzi.html.twig');
   }
    /*
     * O
     */
    
    /**
     * @Route("/glupota-ludzka.html", name="glupota-ludzka")
     */
    public function glupotaludzkaAction()
    {
    return $this->render('default/glupota-ludzka.html.twig');
    }
        
    /*
     * P
     */

    /**
     * @Route("/prawda.html", name="prawda")
     */
    public function prawdaAction()
    {
        return $this->render('default/prawda.html.twig');
    }

    /**
     * @Route("/szewc-bez.html", name="szewc-bez")
     */
     public function szewcbezAction()
     {
     return $this->render('default/szewc-bez.html.twig');
     } 
     
    /*
     * Q
     */

    /*
     * R
     */

    /**
     * @Route("/co-za-duzo.html", name="co-za-duzo")
     */
      public function coZaDuzoAction()
     {
     return $this->render('default/co-za-duzo.html.twig');
     } 
      
    /*
     * S
     */
    /**
     * @Route("/jak-sobie.html", name="jak-sobie")
     */
    public function jakSobieAction()
    {
        return $this->render('default/jak-sobie.html.twig');
    }
    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /**
     * @Route("/gdzie-sie-z-checia.html", name="gdzie-sie-z-checia")
     */
    public function gdzieSieZCheciaAction()
    {
        return $this->render('default/gdzie-sie-z-checia.html.twig');
    }

    /*
     * W
     */
    
    /**
     * @Route("/dobre-lekarstwo.html", name="dobre-lekarstwo")
    */
     public function  dobrelekarstwoAction()
    {
    return $this->render('default/dobre-lekarstwo.html.twig');
    }
    

    /*
     * X
     */
    
    /**
    * @Route("/regula-prosta.html", name="regula-prosta")
    */
    public function regulaprostaAction()
    {
        return $this->render('default/regula-prosta.html.twig');
    }

    /*
     * Y
     */
    
    /**
 * @Route("/kto-pod-kim-dolki.html", name="kto-pod-kim-dolki")
 */
public function ktopodkimdolkiAction()
{
    return $this->render('default/kto-pod-kim-dolki.html.twig');
}
    
    
    
    
    

    /**
     * @Route("/zapomnialwol.html", name="zapomnialwol")
    */
    public function zapomnialwolAction()
    {
        return $this->render('default/zapomnialwol.html.twig');
    }


}
