<?php

namespace App\Form;

use App\Classes\Search;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder
        ->add('string', TextType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'placeholder' => 'Votre Recherche'
            ]
        ])
        ->add('categories', EntityType::class, [
            'label' => false,
            'required' => false,
            'class' => Category::class,
            'multiple' => true,
            'expanded' => true,
            'choice_label' => 'name',
            'choice_attr' => [
                'Mat' => ['data-color' => 'Red'],
                'Velours' => ['data-color' => 'Yellow'],
                'Satin' => ['data-color' => 'Green'],
            ]
        ])
        ->add('Submit', SubmitType::class, [
            'label' => 'filtrer',
            'attr' => [
                'class' => 'btn-block btn-primary'
            ]
        ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET',
            'crsf_protection' => false
        ]);
    }

    public function getBlockPrefix(){

        return '';
    }
}