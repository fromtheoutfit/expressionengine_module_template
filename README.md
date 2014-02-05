ExpressionEngine Module Template
================================

A base template used to quickly spool up a new ExpressionEngine module.

## Wait, what is this?
We build a lot of ExpressionEngine modules over here at [The Outfit](http://fromtheoutfit.com) . Sometime we release [our addons publicly](http://fromtheoutfit.com/products), but more often we are building custom solutions for our clients.

We do it so often, in fact, that it drives us crazy to have to build out the structure for a new addon over and over again. So we created a little template to expedite the process. All you need to do to use it is clone this repo into your /system/expressionengine/third_party directory and do the following:

* Use a tool like [Name Mangler](http://manytricks.com/namemangler/) to rename all the files in that directory to match your addon name.
* Use whatever search/replace tool you like to replace the variables described below in the files contained in that package.

## Variables
### {{ module_name_full }}
This is the full descriptive name of your addon. It can include spaces, etc and doesn't really need to follow any real convention. This is what your end users will see.

### {{ module_name_lcase }}
This is the all lower case name of your module. It must start with a letter and should only contain letters, numbers and underscores. This must match the names of your files which you replaced using a tool like Name Mangler above.

### {{ module_name_ucase }}
This is the all upper case name of your module. It should be the exact string used for {{ module_name_lcase }} but all upper case.

### {{ module_name_ucfirst }}
This is the name of your module. It should be the exact string used for {{ module_name_lcase }} but only the first letter should be capitalized.

### {{ module_description }}
A brief description of your module

### {{ docblock_package }}
Sets the docblock package name attribute for your module

### {{ docblock_version }}
Sets the docblock version number attribute for your module.

### {{ docblock_author }}
Sets the docblock author attribute for your module.

### {{ docblock_link }}
Sets the docblock link attribute for your module.
