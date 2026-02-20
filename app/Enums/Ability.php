<?php

namespace App\Enums;

enum Ability: string
{
  case USER_VIEW = 'user.view';
  case USER_CREATE = 'user.create';
  case USER_UPDATE = 'user.update';
  case USER_DELETE = 'user.delete';

  case PRODUCT_VIEW = 'product.view';
  case PRODUCT_CREATE = 'product.create';
  case PRODUCT_UPDATE = 'product.update';
  case PRODUCT_DELETE = 'product.delete';

  case CATEGORY_VIEW = 'category.view';
  case CATEGORY_CREATE = 'category.create';
  case CATEGORY_UPDATE = 'category.update';
  case CATEGORY_DELETE = 'category.delete';

  case DELIVERY_VIEW = 'delivery.view';
  case DELIVERY_CREATE = 'delivery.create';
  case DELIVERY_UPDATE = 'delivery.update';
  case DELIVERY_DELETE = 'delivery.delete';

  case ORDER_VIEW = 'order.view';
  case ORDER_CREATE = 'order.create';
  case ORDER_UPDATE = 'order.update';
  case ORDER_DELETE = 'order.delete';
}
