<?php

namespace src\PDF;

use lib\PDF\AbstractPdf;
use lib\View\View;
use src\Model\Member\Mapper\MemberContainer;

class Documentation extends AbstractPdf
{
    public function getHtml(): string
    {
        $jfMember = MemberContainer::getInstance()->findBy(['position' => 1]);
        $jfBetreuer = MemberContainer::getInstance()->findBy(['position' => 2]);

        return View::load(
            'pdf/documentation',
            [
                "jfMembers" => $jfMember,
                "jfBetreuers" => $jfBetreuer,
            ]
        );
    }
}