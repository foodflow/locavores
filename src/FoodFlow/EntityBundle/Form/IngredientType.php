<?php

namespace FoodFlow\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('from_chef')
            ->add('from_restaurant')
            ->add('varieties')
            ->add('farms')
            ->add('tip')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FoodFlow\EntityBundle\Entity\Ingredient'
        ));
    }

    public function getName()
    {
        return 'foodflow_entitybundle_ingredienttype';
    }
}
