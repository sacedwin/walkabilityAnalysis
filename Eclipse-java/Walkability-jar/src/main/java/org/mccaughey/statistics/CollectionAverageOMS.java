package org.mccaughey.statistics;

import java.io.IOException;

import org.geotools.data.simple.SimpleFeatureSource;
import org.geotools.factory.CommonFactoryFinder;
import org.opengis.filter.FilterFactory2;
import org.opengis.filter.expression.Function;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import oms3.annotations.Execute;
import oms3.annotations.In;
import oms3.annotations.Out;

/**
 * Calculates the average of an attribute in a dataset.
 *
 * @author amacaulay
 */
public class CollectionAverageOMS
{
	static final Logger LOGGER = LoggerFactory.getLogger( CollectionAverageOMS.class );

	@In
	SimpleFeatureSource featureSource;

	@In
	String attribute;

	@Out
	Double result;


	/**
	 * Calculates the average of an attribute in a dataset. Uses the
	 * "Collection_Average" CQL function provided by geotools.
	 */
	@Execute
	public void average()
	{
		FilterFactory2 ff = CommonFactoryFinder.getFilterFactory2( null );
		Function sum = ff.function( "Collection_Average", ff.property( attribute ) );

		try
		{
			result = (Double) sum.evaluate( featureSource.getFeatures() );
		}
		catch( IOException e )
		{
			LOGGER.error( "Failed to read features" );
			result = null;
		}
	}

}
