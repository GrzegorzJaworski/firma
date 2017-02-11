<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('label' => 'Imię i Nazwisko'))
            ->add('email', EmailType::class, array('label' => 'Mail'))
            ->add('address', TextareaType::class, array ('label' => 'Adres'))
            ->add('phone', TextType::class, array('label' => 'Telefon'))
            ->add('alarmPhone', TextType::class, array('label' => 'Telefon alarmowy'))
            ->add('animals', EntityType::class, array(
                'class' => 'AnimalsBundle:Animals',
                'choice_label' => 'name',
                'multiple' => true,
                'label' => 'Zwierzęta',
                'attr'  => array('class' => 'checkbox')
                ))
            ->add('description')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_user';
    }


}
