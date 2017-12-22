<?php

/* Insert Magic Code Here */

namespace trickyMcTrickFace;

function array_sum($e)
{
    static $i = 0;

    if ($i === 1) {
        return 9;
    }

    ++$i;
    return 0;
}

$array = [1,2,3];

/**




                          `:+ssssssyhddddddhhhhhddddddddddddddddmdysssso/::::::-```
                       `/ymh+:--..-.`````````.://///////////::-.``...-:++++++oshddmNdhs+/:-.`
                     `+mh/.             `-///:.`````````````..-://///::::::::::////os+++osyhddho:`
                    /mh:`          `-:///.``    `-::::::::::::--`   ````````````````    .-:-`.-+ydh+.
                  .yN+`        .:/+/-.` `-:::///:-````````````.-://///////////:::::::///:..:+:   `:yddo-
                 :md-       `:+:.` .-://:-..-::::::://///+/:-                ```..----.`     `      `:sdy-
                /Ns`      `/+.` :/+:..``-://:..````````  .o/`             -::////:-----:///-           .oms
               -Nh       `o- `/+-`   ./+-.`               `:o             -.`-            `-+:`          /M/
              .md`       `` .s.   ./+:.                     y.              o:               :o           Mo
             .mm.           ``  `+/.    `.--:/++++/:-.`     s`             `y                 y`          mm`
           `:md.                ``  `-+hmmNNMMMMNsssyhhho:` `              :o       ```````   ``          :Ns`
         .odMh-.....`        `..  `+dms+NMMMMMMMM-    .-+ddo-              `+ `-+shddhyyyyyy/`             :dh/.
       .omNmdossssso+-    /oo/:-  sMMh+sNNNNNNNNNs+/-`   `-hNy`             .odMMMMmoooooshMMy  -::::::--..``/hmy-
     .omdoo+-.    ``.-``  .--:y/  -syyo/:--.-----:+shhy+-..oMm.         ssoymMMNmmhhhyo++++/:.  .`````..--://- -yN+
    /mNs++.   `-+yyyyyyyys:.` :            `/s`      .:ohdmd+.          -/hMMd+:.                       //:.`:o` oM+
  `sNN+s-    -hds:.`````-+hddhs:.``    `.:sdh:           ``                dN`                  `.:::::-` ./+ .y  dN
 `hNoos.    +Ns`      -`   `-:+ydhysssyhdh+-                               yN           ```  `-sddsoo+sdd+  /+ // mM
 +M/y:s    /Ms       :Mh-`       `......                                   /No``        /dhsydMN/       ..   h `y NM
 sM h:+    dd      `-mMmmho:``                      ::  `-:-                -ymh+`       `.://:.   /`       /+ `y mM
 sM.h:+    my   -+sdMMo  ./ymhs/``          ````````-h-hmhso.                 `/NNy/`             .M+     `++  o:`mN
 .Msh`y`   sM-  :+//sMy      -+ymds+-`    `o::::::::- yN.   ``````              yMMMm+.`          +MNo   -+. .+/.dM+
  hNy/-s`  `mm       oMs         :mMMNhs+:.`          oM/   dmhydmy`          `sNs//:`-//+:      -NMMM:   `:+/` yMo
  `yNdo-o/  `-       .NMd+.       oM+..:oydmdyo/-`     +y`                  `+mh-         -+`  .sMMMMMh .//.   oMs
    +Mho+-++:`        `hMMMNy+.   +M+       `-/oydNdyo/.                omhdNy-             -+hMmyNMMMM.      oMo
     -dmss+/:::         sMMdoymmyyNMMy.           `yMMddmmhyo+:-.`       ```          `.:+hNdhNM/ -MMMM:     :Mo
       :dMd.:/           :Nm.  `/yMMMMNy/-.        sM:    .-/+syymNmdhddysoooooooshdhdmMMN/`  `Ns  oMMM:     dN`
         /dm/             .dm:    /MMNmMMMMNho/.  .Nh            `dN-  `--:+mMm/:-.`   .Nd     mh  /MMM:     Ms
           /Nh`             +Ns`   Nh``./ydNMMMNNmNMd.            ym        `My         oMo   +MMddMMMM:    `Mo
            -Nh              -hmo/sM/      `-oyhmMMMMNmdhs+:-----/NM+-------+MN/----:/+smMMhhmMMMMMMMMM:    `Mo
             /Ms               :hMMs            `yMdsydNMMMMNNNNNMMMMNNNNNNNMMMMNNNNMMMMMMMMMMMMMMMMMMM-     Mo
              oMo               `:hNs-           sM`  ``:+sydmMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMm`     Mo
               +my.                -sdd+.       /Ns         ``.sMNyyhdNNNNMMMMMMMMMMMMMMMMMMMMmNMMNyMM/     `Mo
                .yNo.                `:sdh+.   :Ns             `Mo   ``....oMNs+///oNMmo/-+MM+`:MM:sMh      `Mo
                  :yms.  `/-    :-.     `:yddsyNM.              M+         +M/      dN-   sM+  -NMdMh`       Mo
                    .sms-``-+/-``.:+:.     `-ohdNh+:-.`        -M/         hN      oM+   +Mm.../NMmo`        Mo
                      .smd+. `-//:-`.:+:-.     `.-+yyhhyo++/:-:hMs.      `/MN.  `-yMM+:/sNMMmhhyo:`          Nh
                        .+hdh+-` .:+:. `.://:-`      `.-::/+osyyhdhyyyyyyydmmhyyyhhyyyys+//:-.`   `          sM.
                           ./sdds:. .:+/-..`.-//:--.`             ``````````````````.`         `-//    :     -Mo
                              `-ohdh+-`..-://:-.---:///:-..`    .//::------:://////::`       ./+-`    `h      mh
                                  ./yhhhs/-. `.-::///:::/::///////////:/::::--............-/+:.     .:+-      dh
                                      .-/shhho-.     `.--:///:-......-------------:::-----.`   `..:+/-        dh
                                           .:oddho-`         `.---::////:::-----------------://::-.          `Ny
                                               .:sddy+-`                ``..................`               `hN-
                                                   ./sddy+-````                                            -dm:
                                                       ./sddhhhhs+:.``                                  `-smy.
                                                           `-:::/oyddhyso/-````                     ``-ohms-
                                                                     .-:/sydddhyo+/-............-/oyhdy+-
                                                                             `.:/+syhhhhhhhhhhhhys+:.



 */

// NO CHANGES ALLOWED BELOW

var_dump(count($array), array_sum($array));

$array[0] = 1;
$array[1] = 2;
$array[2] = 3;

var_dump(count($array), array_sum($array));

/*
 * Magic output:
 *
 * int(3)
 * int(0)
 * int(3)
 * int(9)
 */
