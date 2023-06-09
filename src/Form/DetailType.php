<?php

namespace App\Form;

use App\Entity\ContactDetail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adress')
            ->add('phone')
            ->add('email')
            ->add('website')
            ->add('contact')
            ->add('save', SubmitType::class, [
                'attr' => ['class' => ' btn btn-info save'],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactDetail::class,
        ]);
    }
}
