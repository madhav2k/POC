package CucumberTest1;


import org.junit.runner.RunWith;
import cucumber.api.CucumberOptions;
import cucumber.api.junit.Cucumber;

@RunWith(Cucumber.class)
@CucumberOptions(
		features = "Feature",
		glue={"stepDefinition"},
		format = {"html:/Users/sarma/Per/code/Cucumber_Java_Test1/result"}
		)

public class TestRunner {

}