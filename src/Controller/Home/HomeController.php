<?php

namespace src\Controller\Home;

use lib\Controller\AbstractController;
use src\Helper\HTML;
use src\Helper\Redirect;
use src\Model\Member\Mapper\MemberContainer;
use src\Model\Member\Mapper\MemberMapper;
use src\Model\Member\Member;
use src\PDF\Documentation;

class HomeController extends AbstractController
{
    public function homeAction(): void
    {
        if (isset($_GET['PDF'])) {
            $pdf = new Documentation();
            $pdf->initPdf();
            $pdf->outputPdf();
        }

        $members = MemberContainer::getInstance()->findBy();

        $this->render('home/home', [
            'renderWithBasicBody' => true,
            'members' => $members
        ]);
    }

    public function homeFormAction(): void
    {
        if (isset($_POST['deleteMember'])) {
            $member = MemberMapper::getInstance()->read((int)$_POST['member']);

            if ($member instanceof Member) {
                MemberMapper::getInstance()->delete($member);
            }
        }

        if (isset($_POST['addMember'])) {
            $member = new Member();
            $member->setFirstname(HTML::cleanString($_POST['firstname']));
            $member->setLastname(HTML::cleanString($_POST['lastname']));
            $member->setPosition((int)$_POST['position']);

            MemberMapper::getInstance()->create($member);
        }

        Redirect::to('/home');
    }
}