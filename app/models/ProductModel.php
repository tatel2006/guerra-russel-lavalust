<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: ProductModel
 *
 * Uses the base Model class's built-in CRUD methods
 * (all(), find(), insert(), update(), delete(), etc. via __call()).
 * No need to write custom query methods here.
 */
class ProductModel extends Model
{
    protected $table = 'products';
    protected $primary_key = 'id';
    protected $fillable = ['product_name', 'description', 'price', 'quantity'];
    protected $guarded = ['id'];

   
}