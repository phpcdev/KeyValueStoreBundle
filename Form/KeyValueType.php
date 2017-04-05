<?php

namespace Elcweb\KeyValueStoreBundle\Form;

use PHPReaction\CommonBundle\Form\Type\Select2Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class KeyValueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('key')
            ->add('value')
            ->add('description')
            ->add('user', Select2Type::class, [
                'route' => 'user_simple_list',
                'class' => 'PHPReactionUserBundle:User'
            ]);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Elcweb\KeyValueStoreBundle\Entity\KeyValue'
        ));
    }

    public function getName()
    {
        return 'elcweb_bundle_keyvaluestorebundle_keyvaluetype';
    }
}
