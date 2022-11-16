# Herts-Apple-Tree-Supplier-System
Web server built to perform CRUD operations on a data base of Apple trees

Project Case Study: Hatfield Apple Tree Supplier System (HATS)

The HATS management require a system to support the planting and marketing of HATS to be scheduled in the best way to meet the needs of the customers and the staff growing the apple trees to optimise the business marketing strategy.

The client has agreed that for the first prototype [which is the scope of this assessment] a subset of features is required against what the final system might achieve. In this case, a decision has been made to initially rollout the prototype to manage tree varieties (catalogue) and the orchards where each tree is planted.

1. Varieties and apple trees
The prototype needs to allow the Head Grower to register details of apple tree varieties, such as its name and fruit colour(s), such as a green Bramley apple tree variety. Each tree to be planted with have its associated variety stored alongside a retail price to support the sales team when this part of the system rolls out. The Head Grower should have full read/write access rights to manage the trees and associated varieties, whilst the team of Growers should have read-only access.

2. Orchards and tree planting
The prototype also needs to store details of each orchard where types of trees are planted (Trees of the same variety are planted together in an orchard named after the variety). For example, the ‘Northern Bramley Orchard’, ‘Southern Bramley Orchard’, or ‘The Red Delicious Orchard’ etc. This is how the growers will plant and keep track of where trees have been planted. When storing details of trees planted in a particular orchard, the date of planting should also be recorded. Both the Head Grower, and the team of Growers, should have full read/write access rights to managing the records of the orchards and recording where trees are planted.

Data Model

Below is a data model to use as a starting point for your implementation. You may also wish/need to expand the data model to include other relevant entities, such as those which serve primarily as a look-up table. For example, fruit colours which may be best implemented as a look-up to minimise user input errors. You can consult teaching resources to guide your implementation using the given technical frameworks.

It is very important you plan your implementation to cross-check against the User Acceptance Tests (UATs) listed in the separate tasks document.
