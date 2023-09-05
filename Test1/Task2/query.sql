select distinct firm.name
from firm
         left join product on product.firm_id = firm.id
where product.color_id = 1;


select *
from category as subCategory
where left_key > (select left_key from category where id = 1)
  and right_key < (select right_key from category where id = 1);

select count(product.id)
from product
         left join product_category on product.id = product_category.product_id
         left join category on product_category.category_id = category.id
where category.id = 4 and product.color_id = 1;