<?php

namespace App\Form;

use App\Entity\Portfolio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PortType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('image', FileType::class, ['label' => 'IMAGE jpg/PNG/JPEG'])
            ->add('nom')
            ->add('profession')
            ->add('propos', TextareaType::class)
            ->add('dateDeNaissance', DateType::class)
            ->add('tel', TelType::class)
            ->add('city')
            ->add('Qualite')
            ->add('competence')
            ->add('resume', TextareaType::class)
            ->add('experienceProfessionnel', TextareaType::class)
            ->add('service');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Portfolio::class,
        ]);
    }
}
