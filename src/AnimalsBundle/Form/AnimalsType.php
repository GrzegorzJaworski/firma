<?php

namespace AnimalsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class AnimalsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Imię'))
            ->add('breed', EntityType::class, array(
                'class' => 'AnimalsBundle:Breed',
                'choice_label' => 'breed',
                'multiple' => false,
                'label' => 'Rasa',
                'attr'  => array('class' => 'checkbox')
            ))
            ->add('owner')
            ->add('description')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AnimalsBundle\Entity\Animals'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'animalsbundle_animals';
    }


}
