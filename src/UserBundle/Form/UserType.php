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
use FOS\UserBundle\Util\LegacyFormHelper;




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
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Hasło'),
                'second_options' => array('label' => 'Powtórz hasło'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('address', TextareaType::class, array ('label' => 'Adres'))
            ->add('phone', TextType::class, array('label' => 'Telefon'))
            ->add('alarmPhone', null, array('label' => 'Telefon alarmowy'))
//            ->add('animals', TextType::class, array('label' => 'Zwierzęta'))
//            ->add('Breed', EntityType::class, array(
//                'class' => 'AnimalsBundle:Breed',
//                'choice_label' => 'breed',
//                'multiple' => false,
//                'label' => 'Rasa',
//            ))

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
