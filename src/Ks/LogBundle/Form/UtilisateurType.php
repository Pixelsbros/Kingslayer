<?php

namespace Ks\LogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('nom')
            ->add('prenom')
            ->add('pseudo')
            ->add('mail')
            ->add('mdp')
            ->add('ip')
        ;
    }

    public function getName()
    {
        return 'ks_logbundle_utilisateurtype';
    }
}
