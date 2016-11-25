<?php

namespace CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VisitsType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('dataStart', null, array(
                    'label' => 'Rozpoczęcie', 'data' => new \DateTime(),))
                ->add('dataEnd', null, array(
                    'label' => 'Zakończenie', 'data' => new \DateTime(),))
                ->add('animals', null, array('label' => 'Zwierzę'))
                ->add('employee', null, array('label' => 'Pracownik'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CrmBundle\Entity\Visits'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'crmbundle_visits';
    }

}
